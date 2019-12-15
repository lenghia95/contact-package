<?php

namespace Lee\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot()
    {
       // $this->loadRoutesFrom(__DIR__.'/routes/leeroute.php');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');

    }

    public function register()
    {

    }

}
