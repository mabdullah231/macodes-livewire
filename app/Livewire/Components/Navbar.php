<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Navbar extends Component
{
    public $brand; // Declare the property
    public $navLinks; // Declare the property
    public $open = false; // Declare the property

    public function toggle()
    {
        $this->open = !$this->open;
    }

    public function mount()
    {
        // Initialize the brand variable when the component is mounted
        $this->brand = 'MA Codes';
        $this->navLinks = [
            (object) [
                'name' => 'Services',
                'link' => 'services'
            ],
            (object) [
                'name' => 'Technologies',
                'link' => 'skills'
            ],
            (object) [
                'name' => 'Portfolio',
                'link' => 'portfolio'
            ],
            (object) [
                'name' => 'Contact',
                'link' => 'contact'
            ]
        ];
    }

    public function render()
    {
        // Pass the $brand variable to the view
        return view('livewire.components.navbar', [
            'brand' => $this->brand,
            'navLinks' => $this->navLinks,
        ]);
    }
}
