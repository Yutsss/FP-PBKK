<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\AuthService\AuthService;
use App\Services\AuthService\Impl\BasicAuthService;

class AuthServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->singleton(AuthService::class, BasicAuthService::class);
    }
    public function provides(): array
    {
        return [AuthService::class];
    }

    public function boot(): void
    {
        //
    }
}
