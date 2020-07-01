<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
 
 // List courses
Route::get('courses','CourseApiController@index');

//List one course
Route::get('course/{id}','CourseApiController@show');

//register user
Route::post('signup','UserApiController@store');

Route::group(['prefix' =>'auth', 'namespace'=>'Auth'], function(){
	Route::post('signin','SigninController');
	Route::post('signout','SignoutController');
	Route::get('me','MeController');
});


