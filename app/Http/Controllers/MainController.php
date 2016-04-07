<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller\Owner\OwnerController;



class MainController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
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
        }
    }
}