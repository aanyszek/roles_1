<?php

namespace Bunta\Roles;

/**
 * 
 * @author 
 */
use Illuminate\Support\ServiceProvider;

class RolesServiceProvider extends ServiceProvider {

    public function boot(\Illuminate\Routing\Router $router) {

        $router->middleware('role', 'Logobinder\Roles\RolesMiddleware');


        $this->publishes([
            __DIR__ . '/migrations' => $this->app->databasePath() . '/migrations'
                ], 'migrations');
        $this->publishes([
            __DIR__ . '/config' => config_path()
                ], 'config');
    }

    protected $commands = [
            // 'Logobinder\Generator\Commands\GenerateCrudCommand',
    ];

    public function register() {
        $this->commands($this->commands);
    }

}
