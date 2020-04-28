<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserStoreRequest;
use Session;

class UserController extends Controller
{
	// public function validator(Request $request)
 //    {
        // $data = request()->validate([
        // 'first_name' => ['required', 'string', 'max:40'],
        // 'sur_name' => ['required', 'string', 'max:40'],
        // 'phone_number' => ['required', 'string', 'max:10'],
        // 'email' => 'required|email',
        // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);
        
 //        return Redirect::to("form")->withSuccess('Great! Form successfully submit with validation.');
 //    }

    public function register(Request $request) {
    	if($request->isMethod('post')){
            $this->validate($request,[
            	'first_name' => ['required', 'string', 'max:40'],
     		   	'sur_name' => ['required', 'string', 'max:40'],
     		   	'phone_number' => ['required', 'integer', 'max:20', 'min:9'],
     		   	'email' => 'required|email|unique:users',
     		   	'password' => ['required', 'string', 'min:8','confirmed' ]
    		    
            ]);
    		// $validated = Validator::make($request->all(), [
     	// 	    'first_name' => ['required', 'string', 'max:40'],
     	// 	   	'sur_name' => ['required', 'string', 'max:40'],
     	// 	   	'phone_number' => ['required', 'string', 'max:10'],
     	// 	   	'email' => 'required|email',
     	// 	   	're_pass' => ['required', 'string', 'min:8', 'confirmed'],
     	// 	  ]);
    	
     	// 	   if ($validated->fails()) {
     	// 	       Session::flash('error', $validated->messages()->first());
     	// 	       return redirect('frontend.register')->back()->withInput();
     	// 	  }

        	//$validated = $request->validated();
        	$user = new User ();
        	$user->first_name = $request->get ('first_name');
        	$user->sur_name = $request->get ('sur_name');
        	$user->phone_number = $request->get ('phone_number');
        	$user->email = $request->get ('email');
        	$user->password = Hash::make ( $request->get ('password') );
        	//$data = $validated->all();
        	//print_r($data);
        	$user->save ();
        return view('frontend/login')->with('flash_message_success','Welcome, you can now log in.');
        
   		 }

        return view('frontend.register');
    	}




    public  function login(Request $request){
   if($request->isMethod('post'))
     
   {
   	$data = $request->input();
     if(Auth::attempt(['email'=>$data['email'],'password' =>$data['password']])){
       return view('frontend/homepage');
    }else{
       return redirect('frontend/login')->with('flash_message_error','Invalid username or password');
    } 
    }
        return view('frontend/login');
   }




}


