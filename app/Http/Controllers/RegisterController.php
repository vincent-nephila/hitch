<?php   

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('auth.register');
    }


    public function store(Request $request){
        
        //validation
        $this->validate($request, [
            'firstname' => 'required|max:255',
            'middlename' => 'required|max:255',
            'lastname' => 'required|max:255',
            'mobile' => 'required|max:12',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

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
        
        
        Mail::send('auth.login', $confirmation_code, function($message) {
                $message->to($request->email, $request->firstname);
                $message->subject('Verify your email address');
        });
        
   
        
        return redirect('registration')->with('success', "Hooray, things are awesome!");
    }
}
