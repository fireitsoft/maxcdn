<?php

namespace FireItSoft\MaxCdn;

use Illuminate\Support\ServiceProvider;

class MaxCdnServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       // $this->app->make('FireItSoft\MaxCdn\MaxCdnController');
        $this->app->singleton('FireItSoft\MaxCdn\MaxCDN', function(){
            return new MaxCDN();
        }); 
               
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
