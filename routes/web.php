<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\GenerosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/vistas', [PeliculasController::class, 'index'] )
    ->name('vistas.index');

Route::get('/vistas/login', function () {
    return view('login');
});

Route::get('/vistas/añadirpeli', [PeliculasController::class, 'añadirpeli'] )
    ->name('vistas.añadirpeli');

Route::post('/vistas', [PeliculasController::class, 'store'])
    ->name('añadirpeli.store');

Route::get('/vistas/historial', function () {
    return view('historial');
});

Route::get('/vistas/admingeneros', [GenerosController::class, 'admingeneros'])
    ->name('vistas.admingen');

Route::post('/vistas/admingeneros', [GenerosController::class, 'store'])
    ->name('admingeneros.store');

