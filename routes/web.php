<?php

Route::get('/index', 'ClienteController@index');
Route::post('/index', 'ClienteController@store');
Route::get('/listar', 'ClienteController@lista');

