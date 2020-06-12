@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/edit-department') }}"> Edit Department</a> 
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
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>

            <h5>Edit Department</h5>

          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" name="edit_department" id="edit_department" novalidate="novalidate">@csrf
              <div class="control-group">
                <input type="hidden" id="departmentId" name="departmentId" value="<?= $department['departmentId'] ?> ">
                <label class="control-label">Department name</label>
                <div class="controls">
                  <input type="text" name="departmentName" id="departmentName"  value ="<?= $department['departmentName'] ?> ">
                </div>
              </div>
              <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="description" id="description"><?= $department['description'] ?> 
                  </textarea>
                </div>
              <div class="form-actions">
                <input type="submit" value="Edit Department" formaction="{{ url('/admin/edit-department-text') }}" class="btn btn-success">
              </div>
             
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>



@endsection