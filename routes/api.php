<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth.jwt', 'prefix' => 'v1'], function () {
    Route::get('/vendedores', 'VendedoresController@index');
    Route::post('/vendedores', 'VendedoresController@store');
    Route::delete('/vendedores/{id}', 'VendedoresCOntroller@destroy');
    Route::get('/vendedores/{id}', 'VendedoresController@show');
    Route::put('/vendedores/{id}', 'VendedoresController@update');
});

Route::group(['middleware' => 'auth.jwt', 'prefix' => 'dist'], function () {
    Route::get('/distribuidores', 'DistribuidoresController@index');
    Route::post('/distribuidores', 'DistribuidoresController@store');
    Route::delete('/distribuidores/{id}', 'DistribuidoresController@destroy');
    Route::get('/distribuidores/{id}', 'DistribuidoresController@show');
    Route::put('/distribuidores/{id}', 'DistribuidoresController@update');
});

// Ao informar dados válidos(banco de dados) via post (login) deve se copiar o token e colar em authorization (bearer token)
Route::post('/login', 'APIController@login');
Route::get('/login', 'APIController@logout');
