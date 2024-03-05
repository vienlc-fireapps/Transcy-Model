<?php

namespace Transcy\Models;

use Illuminate\Database\Eloquent\Model;

class StoreSwift extends Model
{
    /**
     * @var string
     */
    protected $connection = 'mysql_swift';
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var string
     */
    protected $table = 'stores';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'shopify_domain',
        'domain',
        'shopify_plan',
        'shopify_theme',
        'owner',
        'email',
        'phone',
        'timezone',
        'country',
        'primary_locale',
        'currency',
        'app_status',
        'app_version',
        'app_plan',
        'essental_add_more_words_at',
        'pricing_version',
        'affiliate_partner_id',
        'billing_id',
        'billing_on',
        'used_trial',
        'trial_in_app_on',
        'trial_in_app_end',
        'available_word',
        'onboarding_required',
        'is_show_rating_bar',
        'language_matching',
        'are_translate_frontend',
        'cancelled_on',
        'deleted_at',
        'access_token',
        'created_at',
        'updated_at'
    ];
}
