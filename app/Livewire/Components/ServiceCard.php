<?php

namespace App\Livewire\Components;

use Livewire\Component;

class ServiceCard extends Component
{
    public $service;

    public function mount($service)
    {
        $this->service = $service;
    }
    public function render()
    {
        return view('livewire.components.servicecard');
    }
}
