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
Route::get('/ltd', [App\Http\Controllers\vistasController::class, 'index'])->name('ltd');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/vista', [App\Http\Controllers\dashboard::class, 'index'])->name('vista');




Route::get('/formulario', [App\Http\Controllers\personaController::class, 'index'])->name('formulario');

Route::resource('/personas', App\Http\Controllers\personaController::class);




Route::get('/registrarpersona', [App\Http\Controllers\personaController::class, 'store'])->name('/registrarpersona');
Route::post('/registrousuario', 'personaController@store');//ejecuta bien
