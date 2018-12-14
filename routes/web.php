<?php

Route::view('/landing','landingPage');
Route::view('/checkout','checkout');


Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//cadastros
Route::group(['namespace'=>'Cadastros','prefix'=>'adm','middleware'=>'auth'],function(){
        Route::resource('colaborador','ColaboradorController');
        Route::resource('cargos','CargosController');
        Route::resource('doador','DoadorController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
