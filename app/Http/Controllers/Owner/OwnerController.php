<?php

namespace App\Http\Controllers\Owner;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Input;

class OwnerController extends Controller
{
    //

    public function registerOwner(Request $request){
        
        $this->validate($request, [
            'firstname' => 'required|max:255',
            'middlename' => 'required|max:255',
            'lastname' => 'required|max:255',
            'mobile' => 'required|max:12',
            'email' => 'required|email|max:255|unique:users',
            
        ]);   
       
        $authkey = str_random(30);
        $accesslevel=0;
        
        $user = new User;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->middlename = $request->middlename;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->accesslevel = $accesslevel;
        $user->confirmation_code=$authkey;
        $user->save();
        
        $email = User::where('confirmation_code',$authkey)->first();
        
       
        Mail::send('welcome',['authkey'=>$authkey,'access'=>$email->id,'name'=>$email->firstname], function($message) {
            $message->to(Input::get('email'), Input::get('firstname'))->subject('Welcome to Hitch');});
       
        return redirect('register');
    }
    
    public function verifyCode($id,$authkey){
        $matchfields=['id'=>$id,'confirmation_code'=>$authkey,'confirmed'=>0];
        $user=User::where($matchfields)->first();
        if($user->isEmpty){
            return redirect('register')->with('error', "Invalid token");
        }
        else{
            return view('confirmation')->with('success', "Your account has been confirmed");
       }

    }
}
