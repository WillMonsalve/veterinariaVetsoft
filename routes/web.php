<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CitaController;

Route::get('/', [CitaController::class, 'index'])->name('citas.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
