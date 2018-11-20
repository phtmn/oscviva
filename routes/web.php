<?php

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//cadastros
Route::group(['namespace'=>'Cadastros','prefix'=>'admin','middleware'=>'auth'],function(){
        Route::resource('colaborador','ColaboradorController');
});
