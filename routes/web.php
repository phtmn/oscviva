<?php

Auth::routes();

Route::get('/', 'Site\SiteController@index')->name('site');
Route::get('/doar','Site\SiteController@formPagar')->name('pagar');

//cadastros
Route::group(['namespace'=>'Cadastros','prefix'=>'adm','middleware'=>'auth'],function(){
        Route::resource('colaborador','ColaboradorController');
        Route::resource('cargos','CargosController');
        Route::resource('doador','DoadorController');
});




