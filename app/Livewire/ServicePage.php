<?php

namespace App\Livewire;

use Livewire\Component;

class ServicePage extends Component
{
    public $slug;
    public $service;
    protected $layout = 'components.layouts.app';
    public function mount($slug)
    {
        $this->slug = $slug;

        $services = [
            'web-app-development' => [
                'title' => 'Web App Development',
                'description' => 'Robust, secure, and scalable web applications built with modern stacks like React, Vue, Laravel, and FastAPI.',
                'keywords'=> 'Web App Development, React, Vue, Laravel, FastAPI, Scalable Applications, Secure Authentication, Real-time Features, Enterprise Dashboards, Custom CRMs',
                'details' => 'Beyond just code, I craft experiences. From designing pixel-perfect UIs to implementing real-time interactivity, my web apps are engineered for performance and scalability. I ensure secure authentication, optimized database design, and seamless API integrations. Whether it’s a lean MVP or a complex enterprise dashboard, each project is tailored to deliver long-term maintainability and growth.',
                'highlights' => [
                    'Pixel-perfect UI/UX',
                    'Real-time features',
                    'Scalable APIs',
                    'Secure Authentication',
                ],
                'usecases' => [
                    'Portfolio Websites',
                    'Enterprise Dashboards',
                    'E-commerce Platforms',
                    'Custom CRMs',
                ],
            ],
            'saas-app-solutions' => [
                'title' => 'SaaS App Solutions',
                'description' => 'End-to-end SaaS platform development including subscription billing, authentication, admin dashboards, and multi-tenancy.',
                'keywords'=> 'SaaS Development, Multi-Tenancy, Subscription Billing, Admin Dashboards, Scalable Architecture, SaaS Platforms, CRM, Analytics Dashboards',
                'details' => 'Building SaaS is not just about writing features — it’s about designing for scale, reliability, and user experience. I develop platforms that include secure billing, multi-tenant architecture, and intuitive admin panels. My approach ensures that your product can start lean as an MVP and evolve into a full-featured enterprise SaaS. With modular architecture, every component is ready for upgrades, integrations, and future growth.',
                'highlights' => [
                    'Subscription billing',
                    'Multi-tenancy',
                    'Admin dashboards',
                    'Scalable architecture',
                ],
                'usecases' => [
                    'Subscription Platforms',
                    'Multi-Tenant CRMs',
                    'Analytics Dashboards',
                    'Admin Portals',
                ],
            ],
            'chatbot-integration' => [
                'title' => 'Chatbot Integration',
                'description' => 'AI-powered chatbot development using OpenAI (GPT-5), Gemini, Claude, and Grok.',
                'keywords' => 'Chatbot Development, AI Chatbots, OpenAI, Gemini, Claude, Grok, RAG Pipelines, Vector Search, CRM Integration, Customer Support Bots, E-commerce Assistants',
                'details' => 'Chatbots today are more than scripted replies — they’re intelligent assistants. I design bots with custom RAG pipelines, vector search, and knowledge retrieval systems to provide human-like interactions. Whether connected to your CRM, e-commerce platform, or internal database, these assistants improve customer experience and reduce support overhead. Every integration is tailored to your workflows so the chatbot becomes a natural extension of your team.',
                'highlights' => [
                    'OpenAI & Gemini',
                    'RAG pipelines',
                    'Vector search',
                    'CRM integrations',
                ],
                'usecases' => [
                    'Customer Support Assistants',
                    'E-commerce Bots',
                    'Knowledge Retrieval Agents',
                    'Internal HR Assistants',
                ],
            ],
            'ai-automation-tools' => [
                'title' => 'AI Automation Tools',
                'description' => 'Custom tools powered by AI agents, autonomous workflows, and automation scripts.',
                'keywords' => 'AI Automation, AI Agents, Workflow Automation, Autonomous Tools, Custom Integrations, HR Assistants, Sales Automation, AI Report Generation, Voice-enabled Support',
                'details' => 'AI is not just about answering questions — it’s about automating real work. I build AI-powered tools and agents that streamline repetitive tasks, generate reports, and even handle real-time communications. These solutions integrate with your existing systems, from HR to sales pipelines, enabling teams to focus on strategy instead of manual work. With automation-first design, efficiency gains are built into every workflow.',
                'highlights' => [
                    'AI Agents',
                    'Workflow Automation',
                    'Voice-enabled Bots',
                    'Custom Integrations',
                ],
                'usecases' => [
                    'Sales & Lead Automation',
                    'HR Onboarding Assistants',
                    'AI Report Generation',
                    'Voice-enabled Support',
                ],
            ],
        ];
        

        $this->service = $services[$slug] ?? [
            'title' => 'Service Not Found',
            'description' => 'The requested service does not exist.',
            'usecases' => []
        ];
    }

    public function render()
    {
        return view('livewire.service-page');
    }
}
