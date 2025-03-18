<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\EppController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\EntregaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatisticsController;
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

Route::middleware(['auth'])->group(function () {
// Rurtas de sedes
    Route::get('sede', [SedeController::class, 'index'])->name('sede.index');
    Route::get('sede/edit/{sede}', [SedeController::class, 'edit'])->name('sede.edit');
    Route::get('sede/{sede}', [SedeController::class, 'show'])->name('sede.show');
    Route::post('sede', [SedeController::class, 'store'])->name('sede.store');
    Route::put('sede/{sede}', [SedeController::class, 'update'])->name('sede.update');
    Route::delete('sede/{sede}', [SedeController::class, 'destroy'])->name('sede.destroy');

// Rutas de area

    Route::get('area', [AreaController::class, 'index'])->name('area.index');
    Route::get('area/{area}',[AreaController::class, 'show'])->name('area.show');
    Route::get('area/edit/{area}', [AreaController::class, 'edit'])->name('area.edit');
    Route::post('area', [AreaController::class, 'store'])->name('area.store');
    Route::put('area/{area}', [AreaController::class, 'update'])->name('area.update');
    Route::delete('area/{area}',[AreaController::class, 'destroy'])->name('area.destroy');

// Rutas de Epp

    Route::get('epp', [EppController::class, 'index'])->name('epp.index');
    Route::get('epp/{epp}', [EppController::class, 'show'])->name('epp.show');
    Route::get('epp/edit/{epp}', [EppController::class, 'edit'])->name('epp.edit');
    Route::post('epp', [EppController::class, 'store'])->name('epp.store');
    Route::put('epp/{epp}', [EppController::class, 'update'])->name('epp.update');
    Route::delete('epp/{epp}', [EppController::class, 'destroy'])->name('epp.destroy');

//Rutas de solicitud

    Route::get('solicitud', [SolicitudController::class, 'index'])->name('solicitud.index');
    Route::get('solicitud/create', [SolicitudController::class, 'create'])->name('solicitud.create');
    Route::get('solicitud/{solicitud}', [SolicitudController::class, 'show'])->name('solicitud.show');
    Route::patch('solicitud/{solicitud}', [SolicitudController::class, 'update'])->name('solicitud.update');
    Route::post('solicitud', [SolicitudController::class, 'store'])->name('solicitud.store');

//Rutas de Entrega

    Route::get('entrega', [EntregaController::class, 'index'])->name('entrega.index');
    Route::get('entrega/{entrega}', [EntregaController::class, 'show'])->name('entrega.show');
    Route::patch('entrega/{entrega}', [EntregaController::class, 'update'])->name('entrega.update');

//Rutas de Usuarios

    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::get('user/{user}', [UserController::class, 'show'])->name('user.show');
    Route::get('user/edit/{user}', [UserController::class, 'edit'])->name('user.edit');
    Route::get('user/signature/{user}', [UserController::class, 'editsignature'])->name('user.signature');
    Route::post('/update-signature/{user}', [UserController::class, 'updatesignature'])->name('user.update-signature');
    Route::patch('user/edit/{user}', [UserController::class, 'updaterole'])->name('user.update');



//Rutas de Roles
    Route::get('role', [RoleController::class, 'index'])->name('role.index');
    Route::get('role/create', [RoleController::class, 'create'])->name('role.create');
    Route::get('role/{role}', [RoleController::class, 'show'])->name('role.show');
    Route::post('role', [RoleController::class, 'store'])->name('role.store');

    //Rutas de Estadisticas

    Route::get('staticts', [StatisticsController::class, 'index'])->name('dashboard.index');
    Route::get('/descargar-pdf', [StatisticsController::class, 'downloadPDF'])->name('download.pdf');
    Route::get('/descargar-excel', [StatisticsController::class, 'exportexcel'])->name('download.excel');

});
