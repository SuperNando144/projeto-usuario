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

Route::get('/usuarios', ['as' => 'usuarios', 'uses' => 'App\Http\Controllers\UserController@index']);
Route::get('/formulario', ['as' => 'formulario', 'uses' => 'App\Http\Controllers\UserController@adicionar']);
Route::post('/formulario/salvar', ['as' => 'formulario.salvar', 'uses' => 'App\Http\Controllers\UserController@salvar']);

