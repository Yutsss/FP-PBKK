<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService\AuthService;

class LogoutController extends Controller
{
    private AuthService $AuthService;

    public function __construct(AuthService $AuthService)
    {
        $this->AuthService = $AuthService;
    }

    public function logout()
    {
        $this->AuthService->logout();

        return redirect('/');
    }
}
