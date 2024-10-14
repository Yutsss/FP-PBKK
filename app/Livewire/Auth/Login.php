<?php

namespace App\Livewire\Auth;

use App\Services\AuthService\AuthService;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    private AuthService $AuthService;

    public function boot(AuthService $AuthService)
    {
        $this->AuthService = $AuthService;
    }

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ];
    }

    public function login()
    {
        $this->validate();

        $data = [
            'email' => $this->email,
            'password' => $this->password
        ];

        $this->AuthService->login($data);

        return redirect('/home');
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('components.layouts.login')->section('content');
    }
}
