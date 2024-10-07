<?php

namespace App\Services\UserService;

use App\Models\User;
interface UserService
{
    function register(array $data): void;
    function getUser(int $id): ?User;
    function updateUser(int $id, array $data): void;
    function deleteUser(int $id): void;
}
