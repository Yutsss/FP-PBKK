<?php

namespace App\Exceptions\User;

use Exception;

class UserNotFoundException extends Exception
{
    protected $message;

    public function __construct($message = "UNAUTHORIZED")
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
        ], 401); // Conflict HTTP Status Code
    }
}
