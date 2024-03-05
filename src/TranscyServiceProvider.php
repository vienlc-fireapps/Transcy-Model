<?php

namespace Transcy;

use Illuminate\Support\ServiceProvider;

class TranscyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish all configuration files to the Laravel app
        $this->publishes([
            __DIR__ . '/../config' => config_path('config'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
