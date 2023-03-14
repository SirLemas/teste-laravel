<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('registrar', 'App\Http\Controllers\Api\CadastroController@registrar');
Route::get('registros', 'App\Http\Controllers\Api\CadastroController@registros');
Route::post('validar/{id}', 'App\Http\Controllers\Api\CadastroController@validar')->where('id', '[0-9]+');
Route::get('colaborador/{id}', 'App\Http\Controllers\Api\CadastroController@getColaborador')->where('id', '[0-9]+');
