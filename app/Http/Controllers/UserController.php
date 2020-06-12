<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;

class UserController extends Controller
{
    public function register(Request $request) {
        if($request->isMethod('post')){
           $validator = Validator::make($request->all(), [ 
            'first_name' => ['required', 'string', 'max:40'],
            'sur_name' => ['required', 'string', 'max:40'],
            'phone_number' => ['required', 'numeric', 'min:10'],
            'email' =>'required|email|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

            if ($validator->fails()) {
                 return redirect('frontend/register')
                ->withErrors($validator)
                ->withInput($request->all());

            }
             else {
            $user = new User ();
            $user->first_name = $request->get ('first_name');
            $user->sur_name = $request->get ('sur_name');
            $user->phone_number = $request->get ('phone_number');
            $user->email = $request->get ('email');
            $user->password = Hash::make ( $request->get ('password') );
         // $customer->verifyToken = Str::random(40);
            $user->save ();
            $message = session()->flash('message', 'We have sent you an activation code please check your email.');

            return redirect('frontend/login')->with($message);
        }
         }

        return view('frontend.register');
        }




    public  function login(Request $request){
   if($request->isMethod('post'))
     
   {
    $data = $request->input();
     if(Auth::attempt(['email'=>$data['email'],'password' =>$data['password']])){
       return view('frontend.courses');
    }else{
       return redirect('frontend/login')->with('flash_message_error','Invalid username or password');
    } 
    }
        return view('frontend/login');
   }




}


