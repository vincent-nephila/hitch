<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    //Route::get('register/verify/{confirmation_code}','Auth\AuthController@verifyCode');
    Route::get('/',function(){
        return view('main');
    });
    Route::get('registerOwner',function(){ return view('owner.register');});
    Route::post('registerOwner','Owner\OwnerController@register');
    
    Route::get('registerPassenger',function(){return view('passenger.register');});
    Route::post('registerPassenger','Passenger\PassengerController@register');
    
    Route::get('confirm/{id}/{authkey}','RegisterController@verifyCode');
    Route::post('confirmed/{id}/{authkey}','RegisterController@codeVerified');
    
    Route::get('portal','MainController@index');
    
});
