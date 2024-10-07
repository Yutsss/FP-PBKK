<?php

namespace App\Providers;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use App\Repositories\UserRepository\UserRepository;
use App\Repositories\UserRepository\Impl\UserRepositoryImpl;

class UserRepositoryProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UserRepository::class, UserRepositoryImpl::class);
    }

    public function provides(): array
    {
        return [UserRepository::class];
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
