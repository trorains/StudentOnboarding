<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Course;
use App\Http\Resources\Course as CourseResource;

class CourseApiController extends Controller
{
   
    public function index()
    {
        //Get courses.
         $courses = Course::get();
       
         //Get courses images
         foreach ($courses as $course ) {
           
            // Get course image paths
            $large_image_path = 'images/backend_images/product/large/';
            $medium_image_path = 'images/backend_images/product/medium/';
            $small_image_path = 'images/backend_images/product/small/';

                $large_image = array();
                $medium_image = array();
                $small_image = array();

                // Get large image if exists
                if(file_exists($large_image_path.$course->image)){
                   $large_image= File::get($large_image_path.$course->image);
                }

                // Get medium image if exists
                if(file_exists($medium_image_path.$course->image)){
                    $medium_image = File::get($medium_image_path.$course->image);   
                }

                // Get small image if exists.
                if(file_exists($small_image_path.$course->image)){
                    $small_image = File::get($small_image_path.$course->image);
                 }




         }
          //Return collection of courses as a resource
         return CourseResource::collection($courses);
    }

    


    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        
    }

    
    public function show($id)
    {
        
    }

   


    
    public function destroy($id)
    {
       
    }
}
