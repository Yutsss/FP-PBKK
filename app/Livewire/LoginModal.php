<?php

namespace App\Livewire;

use Livewire\Component;

class LoginModal extends Component
{
    public $isOpen = false;

    // Listen for the event that will open the modal
    protected $listeners = ['openLoginModal' => 'showModal'];

    public function showModal()
    {
        $this->isOpen = true; // Set to true when the event is triggered
        logger()->info('Login modal opened'); // Add a log for debugging
    }

    public function closeModal()
    {
        $this->isOpen = false; // Close the modal
    }

    public function render()
    {
        return view('livewire.login-modal');
    }
}
