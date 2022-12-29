<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// aqui se llama el dashboard de administracion
Route::get('/ltd', [App\Http\Controllers\vistasController::class, 'index'])->name('ltd');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// aqui se llama la vista central
Route::get('/vista', [App\Http\Controllers\dashboard::class, 'index'])->name('vista');
//aqui se llama al formulario para agregar clientes y modificarlos
Route::get('/formulario', [App\Http\Controllers\personaController::class, 'index'])->name('formulario');
//aqui se ejecuta el contralodr update entre otros
Route::resource('/personas', App\Http\Controllers\personaController::class);
Route::resource('/articulos', App\Http\Controllers\articuloController::class);
Route::post('/create', [App\Http\Controllers\articuloController::class, 'store'])->name('/create');
Route::post('/store', [App\Http\Controllers\articuloController::class, 'store'])->name('/store');
