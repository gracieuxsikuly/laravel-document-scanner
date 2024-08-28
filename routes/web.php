<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Scancontroller;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/scan', [Scancontroller::class, 'scan'])->name('scan');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
