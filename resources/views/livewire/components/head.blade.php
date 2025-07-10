<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'My Portfolio') }}</title>

    {{-- Vite: Tailwind CSS + JS --}}
    @vite(['macodes/public/resources/css/app.css', 'macodes/public/resources/js/app.js'])

    {{-- Livewire --}}
    @livewireStyles
    @livewireScripts
</head>

<body>
