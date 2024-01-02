<?php

namespace App\Providers;

use App\Interfaces\EmployeesRepositoryInterface;
use App\Repositories\EmployeesRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(EmployeesRepositoryInterface::class, EmployeesRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
