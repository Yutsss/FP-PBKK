<?php

namespace App\Exceptions\User;

use Exception;

class UserExistsException extends Exception
{
    protected $message;

    public function __construct($message = "User already exists")
    {
        // Set pesan error secara default
        $this->message = $message;
        parent::__construct($this->message);
    }

    public function render($request)
    {
        // Mengembalikan response error dalam format JSON
        return response()->json([
            'error' => $this->message
        ], 409); // Conflict HTTP Status Code
    }
}
