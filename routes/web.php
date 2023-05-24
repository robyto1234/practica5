<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calcon;

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

Route::get('/', function () {
    return view('welcome');
});
/*REGRESO AL INICIO*/
Route::get('regre', function () {
    return view('vistaRegreso');
})->name('regre');

/*NUMERO PERFECTO*/
Route::get('perfec', function () {
    return view('vistaPerfec');
})->name('perfec');

Route::post('obtenerPerfec', [calcon::class, 'calcularPerfec'])->name('obtenerPerfec');

/*CONTAR VOCALES*/
Route::get('vocal', function () {
    return view('vistaVocal');
})->name('vocal');

Route::post('obtenerVocal', [calcon::class, 'calcularVocal'])->name('obtenerVocal');

    /*CONTAR PALABRAS*/
 Route::get('conta', function () {
     return view('vistaConta');
 })->name('conta');

Route::post('obtenerConta', [calcon::class, 'calcularConta'])->name('obtenerConta');

/*FIBONACCI*/
Route::get('fibo', function () {
    return view('vistaFibo');
})->name('fibo');

Route::post('obtenerFibo', [calcon::class, 'calcularFibo'])->name('obtenerFibo');

/*FACTORIAL*/
Route::get('factorial', function () {
    return view('vistaFactorial');
})->name('factorial');

Route::post('obtenerFactorial', [calcon::class, 'calcularFactorial'])->name('obtenerFactorial');