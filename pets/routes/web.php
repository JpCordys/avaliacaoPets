<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('cadastrar', function () {
    return view('cadastrar');
});

Route::get('editar', function () {
    return view('quero-adotar');
});

Route::get('formu', function () {
    return view('formulario');
});

Route::get('cadastrar', function () {
    return view('quero-adotar');
});

Route::get('inte', function () {
    return view('integra');
});

Route::get('login', function () {
    return view('login');
});

Route::get('painel', function () {
    return view('painel');
});

Route::get('adotar', function () {
    return view('quero-adotar');
});

Route::get('recuperar', function () {
    return view('recuperar-senha');
});

Route::get('adotar', [App\Http\Controllers\AnimalController::class, 'adotar'])->name('adotar');

Route::get('integra/integraDetalhe/{id}', [App\Http\Controllers\AnimalDetalhesController::class, 'integraDetalhe'])->name('integra.detalhe');
