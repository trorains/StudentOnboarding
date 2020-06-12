<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Content Master</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{asset('css/backend_css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/bootstrap-responsive.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/backend_css/matrix-login.css')}}" />
        <link href="{{asset('/fonts/backend_fonts/font-awesome/css/font-awesome.css" rel="stylesheet')}}" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

        
    <link rel="stylesheet" type="text/css" href="{{ asset('css/error.css') }}" >

     
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/close.js')}}"></script>  



    
    </head>
    <body>
        <div id="loginbox"> 
            @if(count($errors) >0 )
                            @foreach($errors->all() as $error)
                                <div class="bar error">
                                        <span class="aico">&#9747;</span>
                                        <span class="close">X</span>
                                                &#9747; {{$error}}
                                 </div>
                            @endforeach
                         @endif
                         
                       @if(Session::has('message'))
    
                            <div class="bar success">
                                        <span class="aico">&#9747;</span>
                                        <span class="close">X</span>
                                                &#9747; {!! session('message') !!}
                                 </div>
                         @endif
            <form id="loginform" class="form-vertical" method="post" action="{{url('/master/register')}}">  @csrf
                 <div class="control-group normal_text"> <h3><img src="{{asset('images/master/logo.png')}}" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="first_name" id="first_name" required autocomplete="first_name" autofocus placeholder="First Name"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="sur_name" id="sur_name"  required autocomplete="sur_name" autofocus
                                placeholder="Sur Name"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span> <input type="integer" name="phone_number" id="phone_number"  required autocomplete="phone_number" autofocus placeholder="Phone Number"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="email" name="email" id="email" required autocomplete="email" autofocus placeholder="Your Email"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="password" name="password" id="password" required  autofocus placeholder="Password"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password"/>
                        </div>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class=""><input type="submit"value="Register" class="btn btn-success" /> </span>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                    <span class="pull-right"><input type="submit"value="Login" class="btn btn-success" /> </span>
                </div>

            </form>
            <form id="recoverform" action="#" class="form-vertical">
                <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
                
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to Register</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Recover</a></span>
                </div>
            </form>
        </div>
        
        <script src="{{asset('js/backend_js/jquery.min.js')}}"></script>  
        <script src="{{asset('js/backend_js/matrix.login.js')}}"></script>
        <script src="{{asset('js/backend_js/bootstrap.min.js')}}"></script> 
    </body>

</html>











