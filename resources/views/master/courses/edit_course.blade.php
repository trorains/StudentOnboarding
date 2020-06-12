@extends('layouts.masterLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/master/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/master/edit-course') }}"> Edit Course</a> 
    <h1>Course</h1>
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

            <h5>Edit Course</h5>

          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" name="edit_course" id="edit_course" novalidate="novalidate">@csrf
              <div class="control-group">
                <input type="hidden" id="courseId" name="courseId" value="<?= $course['courseId'] ?> ">


                <label class="control-label">Course name</label>
                <div class="controls">
                  <input type="text" name="courseName" id="courseName"  value ="<?= $course['courseName'] ?> ">
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label">Under Department</label>
                <div class="controls">
                   <select name = "department" id='department'style="width:220px;">
                      <option value = "<?= $course['department'] ?> "  selected ><?= $course['department'] ?> </option>
                      <?php echo $departments_drop_down; ?>
           

                        </select>
                </div>
              
                
              
              <label class="control-label">Description</label>
                <div class="controls">
                  <textarea name="description" id="description"><?= $course['description'] ?> 
                  </textarea>
                </div>
              <div class="form-actions">
                <input type="submit" value="Edit Course" formaction="{{ url('/master/edit-course-text') }}" class="btn btn-success">
              </div>
             </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>



@endsection