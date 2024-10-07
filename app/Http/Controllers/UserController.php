<?php

namespace App\Http\Controllers;

use App\Services\UserService\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;


class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register(Request $request): Response|RedirectResponse
    {
        try {
            $data = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'password' => 'required|string'
            ]);

            $this->userService->register($data);

            return redirect ('/email/verify');
        } catch (Exception $e) {
            return redirect()->route('main')->with('error', $e->getMessage());
        }
    }
}
