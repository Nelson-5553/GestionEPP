<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\SedeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Rurtas de sedes

Route::get('sede', [SedeController::class, 'index'])->name('sede.index');
Route::post('sede', [SedeController::class, 'store'])->name('sede.store');
Route::delete('sede/{sede}', [SedeController::class, 'destroy'])->name('sede.destroy');

// Rutas de area

Route::get('area', [AreaController::class, 'index'])->name('area.index');
Route::post('area', [AreaController::class, 'store'])->name('area.store');
Route::delete('area/{area}',[AreaController::class, 'destroy'])->name('area.destroy');
