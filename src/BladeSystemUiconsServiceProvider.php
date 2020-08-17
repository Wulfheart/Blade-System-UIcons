<?php

namespace Wulfheart\BladeSystemUicons;

use Illuminate\Support\ServiceProvider;
use Wulfheart\BladeSystemUicons\Commands\BladeSystemUiconsCommand;
use BladeUI\Icons\Factory;

class BladeSystemUiconsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/systemuicons'),
            ], 'systemuicons');
        }
    }
    
    public function register()
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('systemuicons', [
                'path' => __DIR__ . '/../resources/svg',
                'prefix' => 'systemuicon',
            ]);
        });
        //
    }
}
