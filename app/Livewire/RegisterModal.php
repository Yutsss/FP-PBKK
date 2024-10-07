<?php
namespace App\Livewire;

use Livewire\Component;

class RegisterModal extends Component
{
    public $isOpen = false;

    protected $listeners = ['openRegisterModal' => 'showModal'];

    public function showModal()
    {
        $this->isOpen = true;
        logger()->info('Register modal opened');
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.register-modal');
    }
}
