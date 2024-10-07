<?php

namespace App\Repositories\UserRepository;

use App\Models\User;
interface UserRepository
{
    public function create(array $data): ?User;
    public function findById(int $id): ?User;
    public function findByEmail(string $email): ?User;
    public function update(int $id, array $data): void;
    public function delete(int $id): void;
}
