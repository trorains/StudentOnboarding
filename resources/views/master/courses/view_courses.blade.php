@extends('layouts.masterLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/master/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/master/courses/view-courses ') }}" class="current">View Courses</a> </div>
    <h1>Courses</h1>
    @if(Session::has('flash_message_error'))
           
            <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong> {!! session('flash_message_error') !!}</strong>

</div>
@endif



@if(Session::has('flash_message_success'))
           
            <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong> {!! session('flash_message_success') !!}</strong>

</div>
@endif
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Existing Courses</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Course ID</th>
                  <th>Course Name</th>
                  <th>Department</th>
                  <th>Descrption</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
               @foreach($courses as $course)
               <tr class="gradeX">
                  <td>{{ $course->courseId}}</td>
                  <td>{{ $course->courseName}}</td>
                  <td>{{ $course->department}}</td>
                  <td>{{ $course->description}}</td>
                  <td class="center"><a href="{{ url('/master/edit-course/'.$course->courseId) }}" class="btn btn-primary btn-mini">Edit</a>  
                    <a href="{{ url('/master/delete-course/'.$course->courseId) }}" class="btn btn-danger btn-mini">Delete</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection