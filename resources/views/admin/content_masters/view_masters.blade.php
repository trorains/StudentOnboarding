@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin/dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/dashboard') }}"> Existing Content Masters</a> 
    <h1>  Content Masters</h1>
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

            <h5>Content Masters</h5>

          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>First Name</th>
                  <th>Sur Name</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
               
               @foreach($masters as $master)
               <tr class="gradeX">
                  <td>{{ $master->id}}</td>
                  <td>{{ $master->first_name}}</td>
                  <td>{{ $master->sur_name}}</td>
                  <td>{{ $master->email}}</td>
                  <td class="center"><a href="{{ url('/admin/revoke-master-text/'.$master->id) }}" class="btn btn-danger">Revoke</a>  
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
  </div>



@endsection