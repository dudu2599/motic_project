<?php

Route::prefix('admin/avaliador')->group(function () {
//home
    Route::get('/', 'Admin\Avaliador\AdminAvaliadorController@index')->name('admin/avaliador/home');
//exibir aluno
    Route::get('/show/{id}', 'Admin\Avaliador\AdminAvaliadorController@show');
//update
    Route::post("/{id}", 'Admin\Avaliador\AdminAvaliadorController@update');
//deletar
    Route::get("/destroy/{id}", "Admin\Avaliador\AdminAvaliadorController@destroy");
//formulario de edita
    Route::get("/update/{id}/edita", "Admin\Avaliador\AdminAvaliadorController@edit");
//formulario de registrar
    Route::get('/cadastro/registro', 'Admin\Avaliador\AdminAvaliadorController@create')->name('admin/avaliador/registro');
//create
    Route::post('/cadastro/registro', 'Admin\Avaliador\AdminAvaliadorController@store');
//create
    Route::get('/atribuir', 'Admin\Avaliador\AdminAvaliadorController@atribuir')->name('admin/avaliador/atribuir');
//
});
Route::post('admin/avaliador/atribui', 'Admin\Avaliador\AdminAvaliadorController@atribui')->name('admin/avaliador/atribui');


