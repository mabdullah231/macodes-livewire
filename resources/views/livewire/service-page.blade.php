@push('head')
    <title>Service - {{ $service['title'] }} | {{ config('app.name') }}</title>
    <meta name="description" content="{{ $service['description'] }}">
    <meta name="keywords" content="{{ $service['keywords'] }}">
@endpush

<div>
    <livewire:components.service.hero :service="$service"/>
    <livewire:components.service.details :service="$service"/>
    <livewire:components.service.usecases :service="$service"/>
</div>
