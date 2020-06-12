<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Session;


class AdminController extends Controller
{
   public  function login(Request $request){
   if($request->isMethod('post'))
   {
      $data =$request->input();
        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>['1']]))
          {
            return redirect('/admin/dashboard');
           }
    else{
       //echo "Failed"; die;
      return redirect('/admin')->with('flash_message_error','Invalid email or password');
        }
    }
      return view('admin.admin_login');
   }


   public function dashboard(){
         return view('admin.dashboard');
     }


   public function logout(){
       Session::flush();
       return redirect('/admin')->with('flash_message_success','Logged out Sucessfully');
   }

   public function settings(){
    return view('admin.settings');
   }

   public function checkPassword(request $request){
    $data = $request->all();
  
    $current_password = $data['current_pwd'];
    $check_password = User::where(['admin' =>'1'])->first();
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



    public function verifyMaster(){
        
        $masters = User::where('admin','=',0)->get();
        $masters = json_decode(json_encode($masters));
        return view('admin.content_masters.add_master')->with(compact('masters'));
    }

     public function verifyMasterText($id){
            User::where(['id'=>$id])->update(['admin'=>'2']);
            return redirect()->back()->with('flash_message_success', 'Content Master has been verified successfully');
      }



      public  function viewMasters(Request $request){
  
    $masters = User::where('admin','=',2)->get();
    $masters = json_decode(json_encode($masters));
 
    return view('admin.content_masters.view_masters')->with(compact('masters'));
    }

public function revokeMasterText($id){
            User::where(['id'=>$id])->update(['admin'=>0]);
            return redirect()->back()->with('flash_message_success', 'Content Master has been revoked successfully');
      }
}
