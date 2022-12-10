<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
//aqui se ejecuta el regitro de personas o clientes
Route::POST('/registrarpersona', [App\Http\Controllers\personaController::class, 'store'])->name('/registrarpersona');
//aqui se ejecuta el contralodr update entre otros
Route::resource('/personas', App\Http\Controllers\personaController::class);





// Route::post('/registrousuario', 'personaController@store');//ejecuta bien
