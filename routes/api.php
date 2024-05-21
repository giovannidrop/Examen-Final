<?php

use App\Http\Controllers\API\PropiedadesController;
use App\Http\Controllers\API\ClientesController;
use App\Http\Controllers\API\AgentesController;
use App\Http\Controllers\API\VisitasController;
use App\Http\Controllers\API\ContratosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Propiedades
Route::get('/propiedades', [PropiedadesController::class, 'index'])->name('propiedades.index');
Route::post('/propiedades', [PropiedadesController::class, 'store'])->name('propiedades.store');
Route::get('/propiedades/{propiedad}', [PropiedadesController::class, 'show'])->name('propiedades.show');
Route::put('/propiedades/{propiedad}', [PropiedadesController::class, 'update'])->name('propiedades.update');
Route::delete('/propiedades/{propiedad}', [PropiedadesController::class, 'destroy'])->name('propiedades.destroy');

// Clientes
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{cliente}', [ClientesController::class, 'show'])->name('clientes.show');
Route::put('/clientes/{cliente}', [ClientesController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [ClientesController::class, 'destroy'])->name('clientes.destroy');

// Agentes
Route::get('/agentes', [AgentesController::class, 'index'])->name('agentes.index');
Route::post('/agentes', [AgentesController::class, 'store'])->name('agentes.store');
Route::get('/agentes/{agente}', [AgentesController::class, 'show'])->name('agentes.show');
Route::put('/agentes/{agente}', [AgentesController::class, 'update'])->name('agentes.update');
Route::delete('/agentes/{agente}', [AgentesController::class, 'destroy'])->name('agentes.destroy');

// Visitas
Route::get('/visitas', [VisitasController::class, 'index'])->name('visitas.index');
Route::post('/visitas', [VisitasController::class, 'store'])->name('visitas.store');
Route::get('/visitas/{visita}', [VisitasController::class, 'show'])->name('visitas.show');
Route::put('/visitas/{visita}', [VisitasController::class, 'update'])->name('visitas.update');
Route::delete('/visitas/{visita}', [VisitasController::class, 'destroy'])->name('visitas.destroy');

// Contratos
Route::get('/contratos', [ContratosController::class, 'index'])->name('contratos.index');
Route::post('/contratos', [ContratosController::class, 'store'])->name('contratos.store');
Route::get('/contratos/{contrato}', [ContratosController::class, 'show'])->name('contratos.show');
Route::put('/contratos/{contrato}', [ContratosController::class, 'update'])->name('contratos.update');
Route::delete('/contratos/{contrato}', [ContratosController::class, 'destroy'])->name('contratos.destroy');