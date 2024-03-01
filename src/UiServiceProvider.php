<?php

namespace Dpb\Ui;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Dpb\Ui\App\View\Components\Test;

class UiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui');
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'ui');

        if ($this->app->runningInConsole()) {

            // Publishing config.
            $this->publishes([
                __DIR__ . '/../config/navigation.php' => config_path('navigation.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/auth'),
            ], 'views');

        }

        Blade::componentNamespace('Dpb\\Ui\\View\\Components', 'ui');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
