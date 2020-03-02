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
    return view('index');
});

Route::get('/sobre', 'SobreController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contato', function(){
    return view('contato');
});

Route::get('/cadastro', function(){
    return view('cadastro');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/checkout', function(){
    return view('checkout');
});
