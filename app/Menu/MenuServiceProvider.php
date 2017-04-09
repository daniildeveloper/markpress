<?php

namespace App\Menu;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * indicates if loading provider is deffered.
     * @var boolean
     */
    protected $defer = true;

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../../config/settings.php", "laravel-menu.settings");
        $this->mergeConfigFrom(__DIR__ . '/../../config/views.php', 'laravel-menu.views');
        $this->app->singleton('menu', function ($app) {
            return new Menu;
        });
    }

    public function boot()
    {
        require_once "blade/lm-attrs.php";
        $active = active_theme();

        $this->loadViewsFrom(__DIR__ . "/resources/views", "laravel-menu");

        $this->publishes([
            __DIR__ . "/resources/views"         => base_path("resources/views/themes/$active/layouts")
            ,
            __DIR . "/../../config/settings.php" => config_path('laravel-menu/settings.php'),
            __DIR__ . "/../../config/views.php"  => config_path("laravel-menu/views.php"),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('menu');
    }
}
