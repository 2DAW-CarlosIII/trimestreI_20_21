<?php

use App\Http\Controllers\ModulosController;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'modulos'], function () {
    Route::get('/', [ModulosController::class, 'index'])->name('modulos.lista');
    Route::get('/edit/{id}', [ModulosController::class, 'edit'])->middleware('auth')->name('modulos.editar');
    Route::put('/', [ModulosController::class, 'update'])->middleware('auth')->name('modulos.actualizar');
});
