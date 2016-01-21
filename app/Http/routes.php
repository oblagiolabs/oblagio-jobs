<?php
Route::group(['middleware' => ['web']], function () {
    
	Route::get('/', function () {
	    return view('welcome');
	});

	
	// Registrasi
		Route::get('registrasi' , 'AuthController@registrasi');
		Route::post('registrasi-validate' , 'AuthController@registrasiValidate');
	//
});
