<?php

namespace App\Http\Controllers;
use App\Course;
use App\Department;
use Image;

use Illuminate\Http\Request;

class CourseController extends Controller
{
     public  function addCourse(Request $request){
    if($request->isMethod('post')){

        if($request->hasFile('image')){
                $image_tmp = $request->file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
                    $fileName = rand(111,99999).'.'.$extension;
                    $large_image_path = 'images/backend_images/course/large'.'/'.$fileName;
                    $medium_image_path = 'images/backend_images/course/medium'.'/'.$fileName;  
                    $small_image_path = 'images/backend_images/course/small'.'/'.$fileName;  

                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300, 300)->save($small_image_path);

                    

                }
            }
    	 $data = $request->all();
         $course = new Course;
         $course->courseName = $data['course_name'];
         $course->department = $data['department_name'];
         $course->description = $data['description'];
         $course->image = $fileName; 
         $course->save();
         return redirect('/master/courses/view-courses')->with('flash_message_success','Course created successfully');
            }   
            $departments = Department::get();
            $departments_drop_down = "<option value='' selected disabled>Select</option>";
            foreach($departments as $department){
                $departments_drop_down .= "<option value='".$department->departmentName."'>".$department->departmentName."</option>";
    	       }


   return view('master.courses.add_courses')->with(compact('departments_drop_down'));;
    

}

public  function viewCourses(Request $request){
  
    $courses = Course::get();
    $courses = json_decode(json_encode($courses));
 
    return view('master.courses.view_courses')->with(compact('courses'));
    

}
 
 

 public function deleteCourse($courseId){
        Course::where(['courseId'=>$courseId])->delete();
        return redirect()->back()->with('flash_message_success', 'Course has been deleted successfully');
    }

    public function editCourse($courseId){
        $departments = Department::get();

        $departments_drop_down = "<option value='' >Select</option>";
        foreach($departments as $department){
            $departments_drop_down .= "<option value='".$department->departmentName."'>".$department->departmentName."</option>";
        }

        $course =Course::where('courseId', '=', $courseId)->first();
        return view('master.courses.edit_course')->with(compact('course','departments_drop_down'));
    }

     public function editCourseText(Request $request){
        
        if($request->isMethod('post')){
            $data = $request->all();
            Course::where(['courseId'=>$data['courseId']])->update(['courseName'=>$data['courseName'],'department'=>$data['department'],'description'=>$data['description']]);
            return redirect()->back()->with('flash_message_success', 'Course information has been updated successfully');
        }
        
    }
}
