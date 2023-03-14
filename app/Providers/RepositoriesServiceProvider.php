<?php

namespace App\Providers;

use App\Contracts\Admin\Auth\ForgotPasswordRepositoryInterface;
use App\Repositories\Admin\Auth\ForgotPasswordRepository;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            ForgotPasswordRepositoryInterface::class,
            ForgotPasswordRepository::class
        );
    }
}