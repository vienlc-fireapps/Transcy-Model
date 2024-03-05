<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class SwitcherModel extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_master';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var string
     */
    protected $table = 'switcher_settings';

    protected $casts = [
        'settings' => 'array',
    ];

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'settings',
        'version'
    ];

    public function unlockFeature()
    {
        return $this->hasOne(\Transcy\Models\UnlockFeatureModel::class, 'id', 'id');
    }

    public function switcherCustoms()
    {
        return $this->hasMany(\Transcy\Models\SwitcherCustomModel::class, 'store_id');
    }

    /**
     * Interact with the user's address.
     *
     * @return  \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function status(): Attribute
    {
        return Attribute::make(
            get: function () {
                return $this->getStatusSwitcher($this);
            }
        );
    }

    public function getStatusSwitcher(SwitcherModel $switcherSetting)
    {
        switch ($switcherSetting->version) {
            case 1:
                $statusSwitcher = $switcherSetting->settings['active'];
                break;
            case 2:
                $statusSwitcher = $switcherSetting->settings['visibility'] == 'public' ? true : false;
                break;
            default:
                $statusSwitcher = $switcherSetting->settings['desktop']['general']['enable_switcher'];
        }

        return $statusSwitcher;
    }

    public static function getDataUpdateSwitcherSetting($version, $status, $visibility)
    {
        $dataUpdate = [];
        switch ($version) {
            case 1:
                $dataUpdate = ['settings->active' => $status];
                break;
            case 2:
                $dataUpdate = ['settings->visibility' => $status == true ? 'public' : 'private'];
                break;
            default:
                $dataUpdate = [
                    'settings->desktop->general->enable_switcher' => $status,
                    'settings->mobile->general->enable_switcher' => $status
                ];
                if ($visibility) {
                    $dataUpdate['settings->desktop->general->visibility'] = $visibility;
                    $dataUpdate['settings->mobile->general->visibility'] = $visibility;
                }
        }

        return $dataUpdate;
    }

    public function importSwitcherDefault($storeId, $type)
    {
        // type classic
        if ($type == 1) {
            $configDefault = config('embed_switcher_settings_classic_v4');
        }

        // type modern
        if ($type == 2) {
            $configDefault = config('embed_switcher_settings_modern_v4');
        }

        $detail = $this->find($storeId);
        if (empty($detail)) {
            $data = [
                'id' => $storeId,
                'settings' => $configDefault,
                'version' => config('fa_common.switcher_version'),
                'created_at' => now(),
                'updated_at' => now()
            ];

            $this->create($data);
        }
    }

    public function updateSwitcherConfigToDefault($storeId, $type)
    {
        // type classic
        if ($type == 1) {
            $configDefault = config('embed_switcher_settings_classic_v4');
        }

        // type modern
        if ($type == 2) {
            $configDefault = config('embed_switcher_settings_modern_v4');
        }

        $data = $this->find($storeId);
        $templateStyle = $data->settings['desktop']['general']['template_style'];

        if ($templateStyle != $type) {
            $this->where('id', $storeId)->update([
                'version' => config('fa_common.switcher_version'),
                'settings' => $configDefault,
            ]);

            return true;
        }

        return false;
    }

    protected function settings(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $geolocationSetting = config('geolocation_settings');
                $settings = json_decode($value, true);

                $templateNameDesktop = $settings['desktop']['templates']['template_name_active'] ?? 'default';
                $templateNameMobile = $settings['mobile']['templates']['template_name_active'] ?? 'default';

                //case template custom desktop
                if (
                    empty($geolocationSetting['desktop']['classic'][$templateNameDesktop])
                    && empty($geolocationSetting['desktop']['modern'][$templateNameDesktop])
                ) {
                    $switcherCustom = $this->switcherCustoms()
                        ->where('handle', $templateNameDesktop)
                        ->first();
                    if ($switcherCustom) {
                        $templateNameDesktop = $switcherCustom->parent;
                    }
                }

                //case template custom mobile
                if (
                    empty($geolocationSetting['mobile']['classic'][$templateNameMobile])
                    && empty($geolocationSetting['mobile']['modern'][$templateNameMobile])
                ) {
                    $switcherCustom = $this->switcherCustoms()
                        ->where('handle', $templateNameMobile)
                        ->first();
                    if ($switcherCustom) {
                        $templateNameMobile = $switcherCustom->parent;
                    }
                }

                if (empty($settings['desktop']['customizations']['geolocation'])) {
                    $settings['desktop']['customizations']['geolocation'] = $geolocationSetting['desktop']['classic'][$templateNameDesktop]['geolocation']
                        ?? $geolocationSetting['desktop']['modern'][$templateNameDesktop]['geolocation'];
                    $settings['mobile']['customizations']['geolocation'] = $geolocationSetting['mobile']['classic'][$templateNameMobile]['geolocation']
                        ?? $geolocationSetting['mobile']['modern'][$templateNameMobile]['geolocation'];
                }

                if (empty($settings['desktop']['customizations']['color']['geolocation_color'])) {
                    $settings['desktop']['customizations']['color']['geolocation_color'] = $geolocationSetting['desktop']['classic'][$templateNameDesktop]['geolocation_color']
                        ?? $geolocationSetting['desktop']['modern'][$templateNameDesktop]['geolocation_color'];
                    $settings['mobile']['customizations']['color']['geolocation_color'] = $geolocationSetting['mobile']['classic'][$templateNameMobile]['geolocation_color']
                        ?? $geolocationSetting['mobile']['modern'][$templateNameMobile]['geolocation_color'];
                }

                return $settings;
            }
        );
    }
}
