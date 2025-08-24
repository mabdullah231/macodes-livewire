<?php

namespace App\Livewire\Components\Service;

use Livewire\Component;

class Hero extends Component
{
    public $service;

    public function mount()
    {
        // Just ensure the component initializes properly
        // No data needed, just the mount method
    }

    public function render()
    {
        return view('livewire.components.service.hero');
    }
}
