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
Route::get('/confirmationSoumission', 'confirmationSoumission@confirmationSoumission');
<<<<<<< HEAD
/*Route::get('/home', function(){
	return ( DB::select('SELECT * from immeubles') ); 
});*/

=======
Route::get('/users', 'UserController@index')->name('users.index');
//routes sur le tableau de bord
Route::get('/', 'HomeController@index')->name('home');
// Route::get('/immeubles', 'ImmeubleController@index')->name('immeubles');
>>>>>>> 36be2b59f0f5a2703792604cf2e1d4721c552bb7


//routes sur le tableau de bord
Route::get('/home', 'HomeController@index')->name('home');

