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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/modulos', 'App\Http\Controllers\ModulosController@getIndex'); 

Route::get('modulos/edit/{id}', 'App\Http\Controllers\ModulosController@getEdit'); 
Route::put('modulos/edit', 'App\Http\Controllers\ModulosController@putEdit');