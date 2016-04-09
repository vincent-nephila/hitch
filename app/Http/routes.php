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
    //Guest Routes
    Route::get('/',['middleware' => 'guest',function(){return view('main');}]);
    
    //Common user Routes
    Route::auth();
    Route::get('portal','MainController@index');
    Route::get('portal/suspendWarning',['middleware' => 'auth',function(){
        if(\Auth::user()->status == env('STATUS_OK') | \Auth::user()->status == env('STATUS_PROCESS')){
            return redirect('portal');
        }
        else{
        return view('suspended');
        }
        
        }]);
    Route::get('confirm/{id}/{authkey}','RegisterController@verifyCode');
    Route::post('confirmed/{id}/{authkey}','RegisterController@codeVerified');
    
    //Owner
    Route::get('registerOwner',['middleware' => 'guest',function(){return view('owner.register');}]);
    Route::post('registerOwner','Owner\OwnerController@register');
    Route::get('portal/owner/requirement',['middleware' => 'auth',function(){
        if(\Auth::user()->status == env('STATUS_OK')| \Auth::user()->status == env('STATUS_SUSPENDED')){
            return redirect('portal');
        }
        else{
        return view('owner.requirement');
        }
        
        }]
    );
    
    //Passenger
    Route::get('registerPassenger',['middleware' => 'guest',function(){return view('passenger.register');}]);
    Route::post('registerPassenger','Passenger\PassengerController@register');
    
     
});
