<?php

use App\Livewire\Categories\MainCategories;
use App\Livewire\Task\MainTask;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

Route::get("/", function () {
    return  redirect()->route("login");
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');



Route::middleware(['auth'])->prefix("tasks")->group(function () {
    Route::get('/', MainTask::class)->name("tarefas");
});

Route::middleware(['auth'])->prefix("categories")->group(function () {
    Route::get('/', MainCategories::class)->name("categorias");
});


require __DIR__ . '/auth.php';
