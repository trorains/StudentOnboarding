@extends('layouts.adminLayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-departments ') }}" class="current">View Departments</a> </div>
    <h1>Departments</h1>
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
            <h5>Existing Departments</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Department ID</th>
                  <th>Department Name</th>
                  <th>Descrption</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
               @foreach($departments as $department)
               <tr class="gradeX">
                  <td>{{ $department->departmentId}}</td>
                  <td>{{ $department->departmentName}}</td>
                  <td>{{ $department->description}}</td>
                  <td class="center"><a href="{{ url('/admin/edit-department/'.$department->departmentId) }}" class="btn btn-primary btn-mini">Edit</a>  
                    <a href="{{ url('/admin/delete-department/'.$department->departmentId) }}" class="btn btn-danger btn-mini">Delete</a></td>
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