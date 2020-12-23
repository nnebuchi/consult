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
    	$user = new User;
    	$user->email = $this->sanitize->sanitizeInput($request->email);
    	$user->save();


    }
}
