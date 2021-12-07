<?php

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

use App\Http\Controllers\PostControlador;

Route::get('/', [PostControlador::class, 'index']);

Route::post('/', [PostControlador::class, 'store']);

Route::delete('/{id}', [PostControlador::class, 'destroy']);

Route::get('/download/{id}', [PostControlador::class, 'download']);