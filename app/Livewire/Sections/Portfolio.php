<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class Portfolio extends Component
{
    public $portfolio_heading;
    public function mount(){
        $this->portfolio_heading = 'Portfolio';
    }
    public function render()
    {
        return view('livewire.sections.portfolio',[
            'portfolio_heading' => $this->portfolio_heading
        ]);
    }
}
