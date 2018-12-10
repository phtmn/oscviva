<?php

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/administrativo', 'Administrativo\AdministrativoController@index')->name('administrativo'); 
Route::get('/filiados', 'Filiados\FiliadosController@index')->name('filiados'); 
Route::get('/frotas', 'Frotas\FrotasController@index')->name('frotas');

Route::get('/frotas/cadastro', 'Frotas\FrotasController@cadastro')->name('frotas.cadastro');
Route::get('/frotas/cadveiculo', 'Frotas\FrotasController@cadveiculo')->name('frotas.cadveiculo');





//cadastros
Route::group(['namespace'=>'Cadastros','prefix'=>'admin','middleware'=>'auth'],function(){
        Route::resource('colaborador','ColaboradorController');
        Route::resource('cargos','CargosController');
        Route::resource('doador','DoadorController');
});

Auth::routes();




