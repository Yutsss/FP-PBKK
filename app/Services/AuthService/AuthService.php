<?php

namespace App\Services\AuthService;


interface AuthService
{
    public function login(array $credentials): bool;
    public function logout(): void;
}
