<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class Skills extends Component
{
    public $skill_heading;
    public $skills = [];
    public function mount()
    {
        $this->skill_heading = 'My Skills';
        // Populate skill image paths from skill_1.png to skill_17.png
        for ($i = 1; $i <= 17; $i++) {
            $this->skills[] = asset("images/skill_{$i}.png");
        }
    }

    public function render()
    {
        return view('livewire.sections.skills', [
            'skills' => $this->skills,
            'skills_heading' => $this->skill_heading
        ]);
    }
}
