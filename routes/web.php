<?php

Auth::routes();

//routes sur la vue welcome


//routes sur les immeubles
Route::get('/immeubles', 'ImmeubleController@index')->name('immeubles.index');
Route::get('/immeubles/nouveau', 'ImmeubleController@create')->name('immeubles.create');
Route::get('/immeubles/{id}', 'ImmeubleController@show')->name('immeubles.show');
Route::post('/immeubles', 'ImmeubleController@store')->name('immeubles.store');
Route::get('/immeubles/{id}/activer', 'ImmeubleController@verified')->name('immeubles.verified');
Route::get('/immeubles/{id}/desactiver', 'ImmeubleController@unverified')->name('immeubles.unverified');
Route::get('/immeubles/{id}/louer', 'PaiementController@louer')->name('paiements.louer');
Route::delete('/immeubles/{id}', 'ImmeubleController@destroy')->name('immeubles.delete');
Route::get('/locations', 'PaiementController@locations')->name('immeubles.location');
Route::get('/confirmationSoumission', 'confirmationSoumission@confirmationSoumission');
Route::get('/users', 'UserController@index')->name('users.index');
// Route::get('/bailleurs/{id}', 'BailleurController@show')->name('bailleurs.show');
Route::resource('bailleurs', 'BailleurController', ['only' => ['index', 'show']]);
//routes sur le tableau de bord
Route::get('/', 'HomeController@index')->name('home');

// Route::get('/immeubles', 'ImmeubleController@index')->name('immeubles');



