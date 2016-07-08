<?php
namespace UserMgmt\Providers;

use Illuminate\Support\ServiceProvider;
use UserMgmt\Models\User;

class UserMgmtServiceProvider extends ServiceProvider {

    public function boot() 
    {

        if (! $this->app->routesAreCached()) {
            require __DIR__.'/../routes.php';
        }

        $this->loadViewsFrom(__DIR__ . '/../Views', 'usermgmt');

        // $this->publishes([
        //     __DIR__.'../assets' => public_path('module/usermgmt'),
        // ], 'public');
    }

    public function register()
    {
        //
    }
}