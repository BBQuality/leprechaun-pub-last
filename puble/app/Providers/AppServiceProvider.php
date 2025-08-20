<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{

    
    public function boot()
    {
        Blade::component('components.menu-list', 'menu-list');
    }
    

}
