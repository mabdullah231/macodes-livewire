<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Request; // to check current path

class Navbar extends Component
{
    public $brand;
    public $navLinks = [];

    public function mount()
    {
        $this->brand = 'MA Codes';

        // ✅ Check if URL matches services/{slug}
        if (Request::is('services/*')) {
            // Only show Home and Use Cases on services pages
            $this->navLinks = [
                (object) [
                    'name' => 'Home',
                    'link' => '/',
                    'isPage' => true // This should navigate to a different page
                ],
                (object) [
                    'name' => 'Use Cases',
                    'link' => '#usecases', // anchor link inside services page
                    'isPage' => false
                ]
            ];
        } else {
            // Default nav links - check if we're on homepage for section scrolling
            $isHomepage = Request::is('/') || Request::is('');
            
            $this->navLinks = [
                (object) [
                    'name' => 'Services',
                    'link' => $isHomepage ? '#services' : '/services',
                    'isPage' => !$isHomepage
                ],
                (object) [
                    'name' => 'Technologies',
                    'link' => $isHomepage ? '#skills' : '/#skills',
                    'isPage' => !$isHomepage
                ],
                (object) [
                    'name' => 'Portfolio',
                    'link' => $isHomepage ? '#portfolio' : '/#portfolio',
                    'isPage' => !$isHomepage
                ],
                (object) [
                    'name' => 'Contact',
                    'link' => $isHomepage ? '#contact' : '/#contact',
                    'isPage' => !$isHomepage
                ]
            ];
        }
    }

    public function render()
    {
        return view('livewire.components.navbar', [
            'brand' => $this->brand,
            'navLinks' => $this->navLinks,
        ]);
    }
}