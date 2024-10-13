<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Services\UserService\UserService;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    private UserService $userService;

    public function boot(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8'
        ];
    }

    public function register()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ];

        $this->userService->register($data);

        return redirect ('/email/verify');
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('components.layouts.app')->section('content');
    }
}
