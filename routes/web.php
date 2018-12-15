<?php

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
Route::get('/dashboard','DashboardController@index')->name('dashboard')->middleware('auth');

//Todas rotas desse grupo estão protegidas por autenticação!!!
Route::group(['middleware'=>'auth','prefix'=>'admin'], function(){

    Route::group(['namespace'=>'Administrativo'],function(){
        // Criar aqui dentro todos os controles referente ao modulo administrativo
        Route::resource('pessoas','PessoasController');
        Route::resource('institucional','InstitucionalController');
        Route::resource('imobilizado','ImobilizadoController');

    });

    Route::group(['namespace'=>'Financeiro'],function(){
        // Criar aqui dentro todos os controles referente ao modulo financeiro

    });

    Route::group(['namespace'=>'Captacao'],function(){
        // Criar aqui dentro todos os controles referente ao modulo captaçao de recursos

    });
});