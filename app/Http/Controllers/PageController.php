<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //
    
    function index(){
        
        //$person = DB::select("select * from users where lastname = 'Villanueva'")->get();
        //$person = \Auth::user()->id;
        $person = \App\User::find(6);
        //$name = 'San Juan Vacation';
        return view('vincent',compact('person'));
        //return "No";
    }
}
