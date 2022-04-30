<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//listar todas las categorias
Route::get('libros','App\Http\Controllers\LibroController@index');

//listar una categoria
Route::get('libros/{id}','App\Http\Controllers\LibroController@show');

//crear una nueva categoria
Route::post('libros','App\Http\Controllers\LibroController@store');

//actualizar categoria
Route::put('libros','App\Http\Controllers\LibroController@store');

//eliminar categoria
Route::delete('libros/{id}','App\Http\Controllers\LibroController@destroy');