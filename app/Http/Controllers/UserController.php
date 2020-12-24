<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SanitizeInput;
use App\User;
use App\Mail\UserRegisterMail;
use Mail;
use Illuminate\Support\MessageBag;
// use  Illuminate\View\Middleware\ShareErrorsFromSession;


class UserController extends Controller
{

		 public function __construct()
    {
     
        $this->sanitize = new SanitizeInput;
    }



    public function submitEmail(Request $request){

    	$check = User::where('email', $request->email)->first();

    	if (is_null($check)) {
    		$user = new User;
	    	$user->email = $this->sanitize->sanitizeInput($request->email);
	    	$user->is_verified = '0';
	    	$user->user_status_id ='1';
	    	$user->verification_code = sha1(\Str::random('7'));
	    	$user->verified_expiry_date = strtotime('+3 days');
	    	$user->save();

	    	Session(['alert'=>'success', 'msg'=>'check your mail for your verification link']);

	    	Session(['verification_code'=>$user->verification_code, 'email'=>$request->email]);

	    	Mail::to($user->email)->send(new UserRegisterMail($user));

	    	return redirect(route('register'));
    	}else{
    		Session(['alert'=>'danger', 'msg'=>'this email already exists']);
    		return redirect(route('register'));
    	}
    	


    }


    public function verifyEmail($email, $token){

    	$user = User::where(['email'=>$email, 'verification_code'=>$token])->first();

    	if (is_null($user)) {
    		dd('invalid verifiction link');
    	}else{
    		if ($user->verified_expiry_date < time()) {
    			dd('this link has expired');
    		}else{

    			$user->is_verified = '1';
    			$user->email_verified_at = time();

    			Session(['alert'=>'success', 'msg'=>'Email Verified Successfuly']);

    			return redirect(route('complete-registration'));
    		}
    		

    	}
    }


    public function completeRegistration(){
    	if (!session('email')) {
    		return redirect(route('login'));
    	}

    	$user = User::where('email', session('email'))->first();
    	if ($user->is_verified == '0') {
    		return view('auth.resend_verifcation_link');
    	}
    	return view('auth.complete_registration');
    }

    public function completeSignup(Request $request){

    	$validatedData = $request->validate([
	        'firstname' => 'required',
	        'lastname'	=> 'required',
	        'phone'		=> 'required',
	        'password'	=>	'required|min:6',
	        
	    ]);


    	$user = User::where('email', session('email'))->first();

    	if (is_null($user)) {
    		
    	}

    	$user->firstname = $request->firstname;
    	$user->lastname = $request->lastname;
    	$user->phone = $request->phone;
    	$user->password = $request->password;
    }
}
