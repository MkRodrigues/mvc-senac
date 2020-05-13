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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/avisos', function () {
    return view('avisos', ['nome' => 'Mikael', 'mostrar' => false, 'avisos' => [['id' => 1, 'texto' => 'aviso 1'], ['id' => 2, 'texto' => 'aviso 2']]]);
});

Route::get('/inicial', function () {
    return view('layouts.menu');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// O atributo Middleware pode ser atribuido ao mesmo array com prefixo, pois o grupo de rotas não aceita o uso do Construtor 
Route::group(['prefix' => 'clientes', 'middleware' => ['auth']], function () {
    Route::get('index', 'ClientesController@index');
    Route::get('show/{clientes}/', 'ClientesController@show');
    Route::get('edit', 'ClienteController@edit');
    Route::get('listar', 'ClientesController@listar');
    Route::get('create', 'ClientesController@create');
    Route::post('store-clientes', 'ClientesController@store');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
});


