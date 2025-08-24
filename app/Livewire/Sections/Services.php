<?php

namespace App\Livewire\Sections;

use Livewire\Component;

class Services extends Component
{
    public $heading;
    public $services; // Array of service cards

    public function mount()
    {
        $this->heading = 'My Services';

        $this->services = [
            [
                'svg' => '<svg class="w-8 h-7 text-secondary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 8-4 4 4 4m8 0 4-4-4-4m-2-3-4 14"/>
                  </svg>',
                'title' => 'Web App Development',
                'slug' => 'web-app-development',
                'description' => 'Efficient, secure, and scalable web applications powered by modern stacks like React, Vue, Laravel, and FastAPI. I deliver pixel-perfect UIs with real-time interactivity, and backend optimized for performance and growth.',
            ],
            [
                'svg' => '<svg class="w-8 h-7 text-secondary" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 3h18v4H3V3zm0 7h18v11H3V10zm5 3h8v2H8v-2z" />
                         </svg>',
                'title' => 'SaaS App Solutions',
                'slug' => 'saas-app-solutions',
                'description' => 'End-to-end SaaS platform development including subscription billing, mutlti-role authentication, admin panels, multi-tenancy, and deployment - everything to launch and scale your SaaS product efficiently.',
            ],
            [
                'svg' => '<svg class="w-8 h-8 text-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
          d="M12 2v4m-6 2a6 6 0 0112 0v4a6 6 0 01-12 0V8zm0 0H4m16 0h-2m-6 8h.01M9 17h.01M15 17h.01" />
</svg>',
                'title' => 'Chatbot Integration',
                'slug' => 'chatbot-integration',
                'description' => 'Chatbot development powered by OpenAI (GPT-5, GPT-4), Gemini, Claude, and Grok. Personalized RAG pipelines, vector search (Pinecone, PostgreSQL), and seamless CRM or support integration.',
            ],
            [
                'svg' => '<svg class="w-7 h-8 text-secondary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
          d="M7 8a4 4 0 00-3 6.93M7 8V6a2 2 0 012-2h.5M7 8h3M17 8a4 4 0 013 6.93M17 8V6a2 2 0 00-2-2h-.5M17 8h-3M9.5 4V3m5 1V3M12 4v16" />
</svg>',
                'title' => 'AI Automation Tools',
                'slug' => 'ai-automation-tools',
                'description' => 'Tailored tools powered by AI agents (LangChain, CrewAI), autonomous workflows, voice bots (Speech-to-Text, ElevenLabs, VAPI), and automation scripts to boost results in sales, support, HR, and operations.',
            ],
        ];
    }


    public function render()
    {
        return view('livewire.sections.services', [
            'heading' => $this->heading,
            'services' => $this->services, // Pass the services array to the view
        ]);
    }
}
