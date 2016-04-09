<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class MainController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('status');
    }
    
    public function index(){
        $accesslevel = \Auth::user()->accesslevel;
        $user = \Auth::user();
        switch($accesslevel){
            case env('USER_PASSENGER');
                return view('passenger.index',compact('user'));
                break;
            case env('USER_OWNER');
                return view('owner.index',compact('user'));
                break;
            case env('USER_ADMIN');
                return view('owner.index',compact('user'));
                break;        
            case env('USER_DRIVER');
                return view('owner.index',compact('user'));
                break;        
        }
    }
    
    
}