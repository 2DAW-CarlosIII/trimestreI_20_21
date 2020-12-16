<?php

use App\Models\Modulo;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/modulos','App\Http\Controllers\ModulosController@index');

Route::put('/modulos', 'App\Http\Controllers\ModulosController@putModulo');

Route::get('/modulos/edit/{id}', function($id){
    return view('edit',array('modulo'=>Modulo::findOrFail($id)));
})->middleware('auth');

