<?php

namespace Lanser\Bitrix24restApi;

use Illuminate\Support\ServiceProvider;

class LaravelBitrix24RestApi extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/bitrix_rest_api.php' => config_path('bitrix_rest_api.php'),
        ], 'bitrix-rest-api-config');
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/bitrix_rest_api.php',
            'bitrix_rest_api'
        );
    }
}