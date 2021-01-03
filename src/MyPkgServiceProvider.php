<?php

namespace My\Pkg;

use Illuminate\Support\ServiceProvider;

class MyPkgServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views','pkg');
        $this->loadMigrationsFrom(__DIR__.'/Migration');
        $this->mergeConfigFrom(__DIR__.'/config/pkg.php','pkg');
        $this->publishes([__DIR__.'/config/pkg.php'=> config_path('pkg.php')]);
    }

    public function register()
    {
        
    }
}
