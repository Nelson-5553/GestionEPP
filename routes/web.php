<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\EppController;
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
Route::get('sede/{sede}', [SedeController::class, 'show'])->name('sede.show');
Route::post('sede', [SedeController::class, 'store'])->name('sede.store');
Route::delete('sede/{sede}', [SedeController::class, 'destroy'])->name('sede.destroy');

// Rutas de area

Route::get('area', [AreaController::class, 'index'])->name('area.index');
Route::get('area/{area}',[AreaController::class, 'show'])->name('area.show');
Route::post('area', [AreaController::class, 'store'])->name('area.store');
Route::delete('area/{area}',[AreaController::class, 'destroy'])->name('area.destroy');

// Rutas de Epp

Route::get('epp', [EppController::class, 'index'])->name('epp.index');
Route::get('epp/{epp}', [EppController::class, 'show'])->name('epp.show');
Route::post('epp', [EppController::class, 'store'])->name('epp.store');
Route::delete('epp/{epp}', [EppController::class, 'destroy'])->name('epp.destroy');
