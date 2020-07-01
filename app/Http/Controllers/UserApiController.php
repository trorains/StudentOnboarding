<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Resources\Course as UserResource;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $user = $request->isMethod('put') ? User::findOrFail($request->id) : new User;

            $validator = Validator::make($request->json()->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password'=>'required|string|min:6',
                'dob' => 'required|string',
                'mobileNumber' => 'required|string|max:13',
                'gender' => 'required|string|max:255',
                'address' => 'required|string|max:255',
            ]) ;

             if($validator->fails()){
                return response()->json($validator->errors()->toJson(), 400);
            }
            else{

            $user->name = $request->input('name');
            $user->email= $request->input('email');
            $user->password= Hash::make($request->input('password'));
            $user->dob= $request->input('dob');
            $user->mobileNumber= $request->input('mobileNumber');
            $user->gender= $request->input('gender');
            $user->address= $request->input('address');
                if ($user->save()) {
            return new UserResource($user);
                }
            }
        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
