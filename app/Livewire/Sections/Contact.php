<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class Contact extends Component
{
    public $contact_heading;
    public $contact_cta;

    public function mount(){
        $this->contact_heading = "Do you have a project to discuss?";
        $this->contact_cta = "Get In Touch";
    }
    public function render()
    {
        return view('livewire.sections.contact');
    }
}
