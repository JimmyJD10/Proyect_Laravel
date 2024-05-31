<?php

use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

// Rutas para el manejo de eventos
Route::get('/events', [SiteController::class, 'events'])->name('events.index');
Route::get('/events/create', [SiteController::class, 'create'])->name('events.create');

Route::post('/events', [SiteController::class, 'store'])->name('events.store');
