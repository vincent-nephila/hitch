<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/authenticate';
    protected $confirmation = 8;
    
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'middlename' => 'required|max:255',
            'lastname' => 'required|max:255',
            'mobile' => 'required|max:12',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    
    /*
    protected function create(array $data)
    {
        $confirmation_code = str_random(30);

        
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'middlename' => $data['middlename'],
            'email' => $data['email'],
            'mobile' => $data['mobile'],
            'address' => $data['address'],
            'accesslevel' => $data['accesslevel'],
            'status' => $data['status'],
            'password' => bcrypt($data['password']),
            'confirmation_code'=>$confirmation_code,
            
        
        ]);
       
    }
     * 
     */
    

 
    public function register(Request $request) {
       
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
        
        $confirmation_code = str_random(30);
        
        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'middlename' => $request->middlename,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'accesslevel' => $request->accesslevel,
            'status' => $request->status,
            'password' => bcrypt($request->password),
            'confirmation_code'=>$confirmation_code,
            
        ]);
        Mail::send('welcome',['confirm'=>$confirmation_code], function($message) {
            $message->to(Input::get('email'), Input::get('firstname'))->subject('Welcome to Hitch');});
       
        return redirect('register')->with('success', "Your request has been submited. Please verify your account through the email that we sent.");
    }
        
     
}
