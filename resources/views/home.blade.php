@push('head')
    <title>{{ config('app.name') }} | Full Stack & AI Developer</title>
    <meta name="description" content="Muhammad Abdullah — Full Stack Developer passionate about building modern web apps, scalable SaaS solutions, AI-based applications, chatbots, and automation tools. View portfolio projects like FastBOT, Task Gen AI, Plant Doc AI, and more.">
    <meta name="keywords" content="Full Stack Developer, SaaS Solutions, AI Applications, Web App Development, Chatbot Integration, AI Automation Tools, React, Laravel, FastAPI, LangChain, Portfolio">
@endpush


<x-layouts.app>
    <livewire:sections.hero />
    <livewire:sections.services />
    <livewire:sections.skills />
    <livewire:sections.portfolio />
    <livewire:sections.contact />
</x-layouts.app>
