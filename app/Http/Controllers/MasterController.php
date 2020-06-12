<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;

class MasterController extends Controller
{
    public function register(Request $request) {
        if($request->isMethod('post')){
           $validator = Validator::make($request->all(), [ 
            'first_name' => ['required', 'string', 'max:40'],
            'sur_name' => ['required', 'string', 'max:40'],
            'phone_number' => ['required', 'numeric', 'min:10','max:10'],
            'email' =>'required|email|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

            if ($validator->fails()) {
                 return redirect('master/register')
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
        	// $user->verifyToken = Str::random(40);
            $user->save ();
            $message = session()->flash('message', 'We have sent your Admin an Email  you will receive Access soon!.');

            return redirect('master/register')->with($message);
        }
         }

        return view('master.register');
        }




   public  function login(Request $request){
   if($request->isMethod('post'))
   {
      $data =$request->input();
        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>['2']]))
          {
            return redirect('/master/dashboard');
           }
    else{
       //echo "Failed"; die;
      return redirect('/master/login')->with('flash_message_error','Invalid email or password or you are not validated yet');
        }
    }
      return view('master.login');
   }


   public function dashboard(){
         return view('master.dashboard');
     }


   public function logout(){
       Session::flush();
       return redirect('/master/login')->with('flash_message_success','Logged out Sucessfully');
   }

   public function settings(){
    return view('master.settings');
   }

   public function checkPassword(request $request){
    $data = $request->all();
  
    $current_password = $data['current_pwd'];
    $check_password = User::where(['admin' =>'2'])->first();
    if(Hash::check($current_password, $check_password->password)){
      echo "true"; die;
    }else{
       echo "false"; die;
    }
    
   }
   
    public function updatePassword(Request $request){
      if($request->isMethod('post')){
         $data = $request->all();
         //echo"<pre>"; print_r($data); die;
         $check_password = User::where(['email' => Auth::user()->email])->first();

         $current_password = $data['current_pwd'];
         if(Hash::check($current_password, $check_password->password)){
      $password = bcrypt($data['new_pwd']);
      User::where('id','1')->update(['password' =>$password]);
      return redirect('/admin/settings')->with('flash_message_success','Password Successfully changed');
    }else{
       return redirect('/admin/settings')->with('flash_message_error','Password not changed, try again later');
    }
    

      }
   }





   }
