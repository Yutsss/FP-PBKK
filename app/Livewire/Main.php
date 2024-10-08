<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $searchValue = '';

    public function render()
    {
        return view('livewire.main-page')->extends('components.layouts.app')->section('content');
    }

    public function submitSearch()
    {
        // Implement search functionality
    }
}
