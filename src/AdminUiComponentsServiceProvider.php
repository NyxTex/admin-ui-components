<?php

namespace NyxTex\AdminUiComponents;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AdminUiComponentsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'admin-ui');

        Blade::componentNamespace('NyxTex\\AdminUiComponents\\Components', 'admin-ui');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/admin-ui'),
        ], 'admin-ui-views');

        $this->publishes([
            __DIR__ . '/../resources/css' => public_path('vendor/admin-ui'),
        ], 'admin-ui-assets');
    }
}