<?php

namespace App\Livewire\Components\Service;

use Livewire\Component;

class Details extends Component
{
    public $service;

    public function render()
    {
        return view('livewire.components.service.details');
    }
}