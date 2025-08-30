<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <title>{{ config('app.name', 'My Portfolio') }}</title> --}}
    @stack('head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/x-icon" href="public/LOGO.ico">
    @livewireStyles
</head>

<body>
    <livewire:components.navbar />

    <main>
        {{ $slot }}
    </main>

    <livewire:components.footer />
    <livewire:components.scroll-to-top />

    @livewireScripts
    @livewireScriptConfig
</body>

</html>
