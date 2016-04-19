<?php

namespace Laraveldaily\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezoneServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/laraveldaily/timezones'),
            __DIR__.'/migrations' => $this->app->databasePath().'/migrations'
            
        ]);      

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/routes.php';
        $this->app->make('Laraveldaily\Timezones\TimezonesController');      

    }
}
