<?php

namespace App\Livewire\Components;

use Livewire\Component;

class PortfolioCard extends Component
{
    public array $items = [];

    public function mount()
    {
        $this->items = [
            [
                'title' => 'FastBOT',
                'image' => 'images/PortfolioCard1.png',
                'description' => 'React + FastAPI + LangChain + Tailwind CSS',
                'link' => 'https://example.com/miss-symetria',
            ],
            [
                'title' => 'UAM Bank',
                'image' => 'images/PortfolioCard2.jpg',
                'description' => 'React + Vanilla CSS',
                'link' => 'https://example.com/food-app',
            ],
            [
                'title' => 'Task Gen AI',
                'image' => 'images/PortfolioCard3.png',
                'description' => 'React + Laravel + GEMINI + Tailwind CSS',
                'link' => 'https://example.com/crypto-tracker',
            ],
            [
                'title' => 'Resortex',
                'image' => 'images/PortfolioCard4.png',
                'description' => 'PHP + jQuery + Vanilla CSS',
                'link' => 'https://example.com/beauty-studio',
            ],
            [
                'title' => 'MHM Real Estate',
                'image' => 'images/PortfolioCard5.jpg',
                'description' => 'PHP + jQuery + Bootstrap',
                'link' => 'https://example.com/social-tool',
            ],
            [
                'title' => 'Plant Doc AI',
                'image' => 'images/PortfolioCard6.png',
                'description' => 'React + Laravel + GEMINI + Tailwind CSS',
                'link' => 'https://example.com/ecommerce',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.components.portfolio-card');
    }
}
