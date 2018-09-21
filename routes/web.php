<?php

Auth::routes();

//routes sur la vue welcome
Route::get('/', 'WelcomeController@index');


//routes sur les immeubles
Route::get('/immeubles', 'ImmeublesController@immeubles')->name('immeubles');
Route::post('/immeubles', 'ImmeublesController@submit');
Route::get('/confirmationSoumission', 'confirmationSoumission@confirmationSoumission');
/*Route::get('/home', function(){
	dump(DB::select('SELECT * from immeubles'))->name('home'); 
});*/



//routes sur le tableau de bord
Route::get('/home', 'HomeController@index')->name('home');

