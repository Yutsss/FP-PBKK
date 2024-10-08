<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $searchValue = '';

    public function render()
    {
        return view('livewire.home-page');
    }

    public function submitSearch()
    {
        // Implement search functionality
    }
}
