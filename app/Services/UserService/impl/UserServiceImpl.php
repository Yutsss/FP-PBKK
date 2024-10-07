<?php

namespace App\Services\UserService\impl;

use App\Exceptions\User\UserExistsException;
use App\Models\User;
use App\Services\UserService\UserService;
use App\Repositories\UserRepository\UserRepository;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class UserServiceImpl implements UserService
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function register(array $data): void
    {
        $userRepository = $this->userRepository;

        $userExists = $userRepository->findByEmail($data['email']);

        if ($userExists) {
            throw new UserExistsException();
        }

        $user = $userRepository->create($data);

        event(new Registered($user));

        Auth::login($user);
    }

    function getUser(int $id): ?User
    {
        // TODO: Implement getUser() method.
    }

    function updateUser(int $id, array $data): void
    {
        // TODO: Implement updateUser() method.
    }

    function deleteUser(int $id): void
    {
        // TODO: Implement deleteUser() method.
    }
}
