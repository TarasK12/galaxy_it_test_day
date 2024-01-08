<?php

namespace App\Providers;

use App\ModelControllers\CarController;
use Illuminate\Support\ServiceProvider;

class ControllerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->app->singleton(CarController::class);
        $this->app->alias(CarController::class, 'CarController');

    }
}
