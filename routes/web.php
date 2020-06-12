<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//User Routes

Route::match(['get','post'],'/frontend/register','UserController@register');
Route::match(['get','post'],'/frontend/login','UserController@login');

// Administrator routes
Route::match(['get','post'],'/admin','AdminController@login');
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/settings',"AdminController@settings");
Route::get('/admin/check-pwd','AdminController@checkPassword');
Route::match(['get','post'],'/admin/update_pwd','AdminController@updatePassword');
Route::get('/logout','AdminController@logout');
//Department Routes
Route::match(['get','post'],'/admin/add-department','DepartmentController@addDepartment');
Route::get('/admin/edit-department/{departmentId}','DepartmentController@editDepartment');
Route::post('/admin/edit-department-text','DepartmentController@editDepartmentText');
Route::get('/admin/view-departments',"DepartmentController@viewDepartments");
Route::get('/admin/delete-department/{departmentId}',"DepartmentController@deleteDepartment");



//Master Admin Routes
Route::match(['get','post'],'/admin/content_masters/verify-master','AdminController@verifyMaster');
Route::match(['get','post'],'/admin/verify-master-text/{id}','AdminController@verifyMasterText');
Route::match(['get','post'],'/admin/content_masters/view-masters','AdminController@viewMasters');
Route::match(['get','post'],'/admin/revoke-master-text/{id}','AdminController@revokeMasterText');

//Master routes
Route::match(['get','post'],'/master/register','MasterController@register');
Route::match(['get','post'],'/master/login','MasterController@login');
Route::get('/master/dashboard', 'MasterController@dashboard');
Route::get('/master/settings',"MasterController@settings");
Route::get('/master/check-pwd','MasterController@checkPassword');
Route::match(['get','post'],'/master/update_pwd','MasterController@updatePassword');
Route::get('master/logout','MasterController@logout');

//Courses Routes
Route::match(['get','post'],'/master/courses/add-course','CourseController@addCourse');
Route::get('/master/edit-course/{courseId}','CourseController@editCourse');
Route::post('/master/edit-course-text','CourseController@editCourseText');
Route::get('/master/courses/view-courses',"CourseController@viewCourses");
Route::get('/master/delete-course/{courseId}',"CourseController@deleteCourse");






  



// Auth::routes();


//  Route::group(['middleware' => ['admin']], function () {
   
 

// });


