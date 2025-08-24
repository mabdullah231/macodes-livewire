<?php
use App\Livewire\ServicePage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/services/{slug}', ServicePage::class)->name('service.show');
