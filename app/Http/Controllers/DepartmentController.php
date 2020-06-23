<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public  function addDepartment(Request $request){
    if($request->isMethod('post')){
         $validator = Validator::make($request->all(), [ 
            'department_name' => ['required|unique:departments', 'string', 'max:40'],
            'description' => ['required', 'text', 'max:40'],
            
        ]);
         if ($validator->fails()) {
                 return redirect('admin/add-department')
                ->withErrors($validator)
                ->withInput($request->all());

            }
            {
        else
    	 $data = $request->all();
         $department = new Department;
         $department->departmentName = $data['department_name'];
         $department->description = $data['description'];
         $department->save();
         return redirect('/admin/view-departments')->with('flash_message_success','Department added successfully');

            }
    	}
   return view('admin.departments.add_department');
    

}

public  function viewDepartments(Request $request){
  
    $departments = Department::get();
    $departments = json_decode(json_encode($departments));
 
    return view('admin.departments.view_departments')->with(compact('departments'));
    

}
 
 

 public function deleteDepartment($departmentId){
        Department::where(['departmentId'=>$departmentId])->delete();
        return redirect()->back()->with('flash_message_success', 'Department has been deleted successfully');
    }

    public function editDepartment($departmentId){

        $department =Department::where('departmentId', '=', $departmentId)->first();
        return view('admin.departments.edit_department')->with(compact('department'));
    }

     public function editDepartmentText(Request $request){
        
        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [ 
            'department_name' => ['required|unique:departments', 'string', 'max:40'],
            'description' => ['required', 'text', 'max:40'],
            
        ]);
         if ($validator->fails()) {
                
                 return redirect('admin/edit-department/{departmentId}')
                ->withErrors($validator)
                ->withInput($request->all());

            }
            else{
            $data = $request->all();
            Department::where(['departmentId'=>$data['departmentId']])->update(['departmentName'=>$data['departmentName'],'description'=>$data['description']]);
            return redirect()->back()->with('flash_message_success', 'Department has been updated successfully');
        }
        }
        
    }


}
