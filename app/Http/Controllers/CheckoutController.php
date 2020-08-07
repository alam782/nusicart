<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class CheckoutController extends Controller
{
	  public function login_check()
    {
        return view ('auth.login');
    }

    public function CheckoutPage(){
         return view ('pages.checkout');
    }

      public function regi_check()
    {
        return view ('auth.register');
    }
    


    public function checkout()
     {
        return view ('pages.checkout');
    }



     public function user_login(Request $request)
    {
    	$email=$request->email;
    	$password=($request->password);
    	$result=DB::table('users')
    	->where('email',$email)
    	->where('password',$password)
    	->first();

    if($result) {
    		
    		return Redirect::to('/checkout');

    	}
    	else
        {
    		Session::put('message','Email or Password does not match');
    		return Redirect::to('/login-check');
    	}
   

    }

   
}
