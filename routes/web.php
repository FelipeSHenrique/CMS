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

Route::get('/', 'Site\HomeController@index');

Route::prefix('painel')->group(function() {
    Route::get('/', 'Admin\HomeController@index')->name("admin");

    Route::get('login', 'Admin\Auth\LoginController@index')->name('login');
    Route::post('login', 'Admin\Auth\LoginController@authenticate');

    Route::get('register', 'Admin\Auth\RegisterController@index')->name('register');
    Route::post('register', 'Admin\Auth\RegisterController@register');

    Route::post('logout', 'Admin\Auth\LoginController@logout')->name('logout');

    // O Metodo resource é usado quando criamos uma rota --resource, usando isso todos os metodos HTTP estão nele como o GET, POST, PUT, DELETE, fazendo com que não precisamos criar varias rotas.
    Route::resource('users', 'Admin\UserController');
});