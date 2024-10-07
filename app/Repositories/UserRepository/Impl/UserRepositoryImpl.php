<?php

namespace App\Repositories\UserRepository\Impl;

use App\Models\User;
use App\Repositories\UserRepository\UserRepository;

class UserRepositoryImpl implements UserRepository
{

    public function create(array $data): ?User
    {
        $user = User::create($data);

        return $user;
    }

    public function findById(int $id): ?User
    {
        return User::find($id);
    }

    public function findByEmail(string $email): ?User
    {
        return User::where('email', $email)->first();
    }

    public function update(int $id, array $data): void
    {
        $user = User::find($id);
        $user->update($data);
    }

    public function delete(int $id): void
    {
        User::destroy($id);
    }
}
