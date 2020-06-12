@extends('layouts.masterLayout.admin_design')
@section('content')
<!--main-container-part-->
<div id="content">


<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">  
      	

        <li class="bg_ls"> <a href="{{ url('/master/courses/view-courses') }}"> <i class="icon-inbox"></i> Courses</a> </li>
       
      </ul>
    </div>


  
    
  </div>
</div>


@endsection