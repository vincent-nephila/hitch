<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    
    function index(){
        //if(Auth::check()){
            return view('auth.main');
        //}

    }
}
