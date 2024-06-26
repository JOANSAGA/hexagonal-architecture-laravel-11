<?php

namespace App\User\Providers;

use Illuminate\Support\ServiceProvider;
use App\User\Domain\UserRepository;
use App\User\Infrastructure\Persistence\EloquentUserRepository;

class UserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(UserRepository::class, EloquentUserRepository::class);
    }

    public function boot()
    {
        // Código para ejecutar cuando el proveedor de servicios se inicializa, si es necesario
    }
}
