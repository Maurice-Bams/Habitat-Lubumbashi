<?php

Auth::routes();

//routes sur la vue welcome
Route::get('/', 'WelcomeController@index');


//routes sur les immeubles
Route::get('/immeubles', 'ImmeubleController@index')->name('immeubles.index');
Route::get('/immeubles/nouveau', 'ImmeubleController@create')->name('immeubles.create');
Route::post('/immeubles', 'ImmeubleController@store')->name('immeubles.store');
Route::get('/confirmationSoumission', 'confirmationSoumission@confirmationSoumission');

//routes sur le tableau de bord
Route::get('/', 'ImmeubleController@index')->name('home');



