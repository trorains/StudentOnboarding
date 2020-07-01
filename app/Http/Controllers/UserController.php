<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
// use Session;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\PayloadFactory;
use Tymon\JWTAuth\JWTManager as JWT;

class UserController extends Controller
{
   //  public function register(Request $request) {
   //      if($request->isMethod('post')){
   //         $validator = Validator::make($request->all(), [ 
   //          'first_name' => ['required', 'string', 'max:40'],
   //          'sur_name' => ['required', 'string', 'max:40'],
   //          'phone_number' => ['required', 'numeric', 'min:10'],
   //          'email' =>'required|email|unique:users',
   //          'password' => ['required', 'string', 'min:8', 'confirmed'],
   //      ]);

   //          if ($validator->fails()) {
   //               return redirect('frontend/register')
   //              ->withErrors($validator)
   //              ->withInput($request->all());

   //          }
   //           else {
   //          $user = new User ();
   //          $user->first_name = $request->get ('first_name');
   //          $user->sur_name = $request->get ('sur_name');
   //          $user->phone_number = $request->get ('phone_number');
   //          $user->email = $request->get ('email');
   //          $user->password = Hash::make ( $request->get ('password') );
   //       // $customer->verifyToken = Str::random(40);
   //          $user->save ();
   //          $message = session()->flash('message', 'We have sent you an activation code please check your email.');

   //          return redirect('frontend/login')->with($message);
   //      }
   //       }

   //      return view('frontend.register');
   //      }




   //  public  function login(Request $request){
   // if($request->isMethod('post'))
     
   // {
   //  $data = $request->input();
   //   if(Auth::attempt(['email'=>$data['email'],'password' =>$data['password']])){
   //     return view('frontend.courses');
   //  }else{
   //     return redirect('frontend/login')->with('flash_message_error','Invalid username or password');
   //  } 
   //  }
   //      return view('frontend/login');
   // }

    public function register(Request $request){
            $validator = Validator::make($request->json()->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password'=>'required|string|min:6',
                'dob' => 'required|date|max:13',
                'mobileNumber' => 'required|numeric|max:13',
                'gender' => 'required|string|max:255',
                'address' => 'required|string|max:255',
            ]) ;

            if($validator->fails()){
                return response()->json($validator->errors()->toJson(), 400);
            }
            $user = User::create([
                'name' => $request->json()->get('name'),
                'email' => $request->json()->get('email'),
                'password' => Hash::make($request->json()->get('password')),
                'dob' => $request->json()->get('dob'),
                'mobileNumber' => $request->json()->get('mobileNumber'),
                'gender' => $request->json()->get('gender'),
                'address' => $request->json()->get('address'),
            ]);

            $token =JWTAuth::fromUser($user);
            return response()->json(compact('user', 'token'),201);
    }

    // public function login(Request $request){
    //     $credentials =$request

    // }


}


