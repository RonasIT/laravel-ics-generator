<?php

namespace RonasIT\Support;

use Illuminate\Support\ServiceProvider;

class CalendarServiceProvider extends ServiceProvider
{
    public function boot() {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/Http/routes.php';
        }

        $this->publishes([
            __DIR__.'/config/ics-generator.php' => config_path('ics-generator.php'),
        ], 'config');
    }
}