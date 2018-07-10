<?php

namespace Robust\Contact\Providers;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return  
     */
    public function boot()
    {
       $this->loadRoutesFrom(__DIR__."/../routes/web.php");
       $this->loadViewsFrom(__DIR__."/../views", 'contact');//give package name contact or view
       $this->loadMigrationsFrom(__DIR__."/../database/migrations");
       $this->mergeConfigFrom(__DIR__."/../config/contact.php", "contact");//packagename = contact

       $this->publishes([
        __DIR__.'/../config/contact.php' => config_path('contact.php')
       ], 'config');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Robust\Contact\Controllers\ContactController');
    }
}
 
