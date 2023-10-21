<?php

namespace Kagoji\Crud;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class KagojiCrudServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->register(\Kagoji\Crud\Providers\RepositoryServiceProvider::class);
        $this->app->make('Kagoji\Crud\Controllers\CandidateController');
        
        // $this->app->bind(
        //     CandidateRepositoryInterface::class,
        //     CandidateRepository::class
        // );

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //migration key lenth fixed
        Schema::defaultStringLength(191);

        //Load views
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        
        //Asset publish
        $this->publishes([
            __DIR__.'/public/assets' => public_path('kagoji/crud/assets'),
        ], 'kagoji-crud-public');

        //resource views
        $this->loadViewsFrom(__DIR__.'/views','crud');
        
        //migration load
        $this->loadMigrationsFrom(__DIR__.'/migrations');

    
    
    }
}
