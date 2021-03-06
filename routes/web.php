<?php

use App\Http\Controllers\UsuariosController;
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
    return view('index');
});

Route::get('ingresar', function () {
    return view('ingresar');
});

Route::get('registrar', function () {
    return view('registrar');
});

Route::post('registrar', [UsuariosController::class, "store"])->name('registrado');

Route::post('ingresar', [UsuariosController::class, "validarForm"])->name('validar');