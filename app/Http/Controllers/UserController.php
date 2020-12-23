<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SanitizeInput;
use App\User;

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
	    	$user->save();

	    	return redirect(route('register'))->with('success', 'check your mail for your verification link');
    	}else{
    		return redirect(route('register'))->with('error', 'this email already exists');
    	}
    	


    }
}
