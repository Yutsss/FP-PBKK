<?php

namespace App\Services\AuthService\Impl;

use App\Services\AuthService\AuthService;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepository\UserRepository;
use App\Exceptions\User\WrongCredentialsException;

class BasicAuthService implements AuthService
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(array $credentials): bool
    {
        $user = $this->userRepository->findByEmail($credentials['email']);

        if (!$user) {
            throw new WrongCredentialsException();
        }

        return Auth::attempt($credentials);
    }

    public function logout(): void
    {
        Auth::logout();
    }
}
