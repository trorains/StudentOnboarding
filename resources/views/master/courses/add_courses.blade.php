@extends('layouts.masterLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('master/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/master/add-course') }}">Add Course</a> </div>
    <h1>Courses</h1>
    @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif   
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Course</h5>
          </div>
          <div class="widget-content nopadding">
            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('master/courses/add-course') }}" name="add_course" id="add_course" novalidate="novalidate">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Course Name</label>
                <div class="controls">
                  <input type="text" name="course_name" id="course_name">
                </div>
              </div>
             <div class="control-group">
                <label class="control-label">Under Department</label>
                <div class="controls">
                  <select name="department_name" id="department_name" style="width:220px;">
                    <?php echo $departments_drop_down; ?>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="description" id="description" class="textarea_editor span12"></textarea>
                </div>
              </div>
             
              
              <div class="control-group">
                <label class="control-label">Upload Image</label>
                <div class="controls">
                  <input name="image" id="image" type="file">
                </div>
              </div>
            
              <div class="form-actions">
                <input type="submit" value="Add Course" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection