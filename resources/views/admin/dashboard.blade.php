@extends('layouts.adminLayout.admin_design')
@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="{{ url('/admin/view-departments') }}"> <i class="icon-dashboard"></i>  Departments </a> </li>
        <li class="bg_lg "> <a href="{{ url('/admin/view-masters') }}"> <i class="icon-signal"></i> Content Masters</a> </li>

      </ul>
    </div>
<!--End-Action boxes-->    


    
    
    </div>
  </div>
</div>

<!--end-main-container-part-->
@endsection