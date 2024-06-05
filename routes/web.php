<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\TalleresController;
use App\Http\Controllers\AsesoramientoController;
use App\Http\Controllers\ContactoController;

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/programas', [ProgramasController::class, 'index'])->name('programas');
Route::get('/talleres', [TalleresController::class, 'index'])->name('talleres');
Route::get('/asesoramiento', [AsesoramientoController::class, 'index'])->name('asesoramiento');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');

