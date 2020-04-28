
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/error.css') }}" >

    <script src="{{asset('js/jquery/jquery.min.js')}}"></script>  
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/close.js')}}"></script>  
  

    
</head>
    <div class="main">
        
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        @if(count($errors) >0 )
                            @foreach($errors->all() as $error)
                                <div class="bar error">
                                        <span class="aico">&#9747;</span>
                                        <span class="close">X</span>
                                                &#9747; {{$error}}
                                 </div>
                            @endforeach
                         @endif
                        @if(Session::has('flash_message_success'))
                             <div class="alert alert-success alert-block">
                                 <button type="button" class="close" data-dismiss="alert">×</button> 
                                    <strong> {!! session('flash_message_success') !!}</strong>
                            </div>
                         @endif
                        <h2 class="form-title">Sign up</h2>
                        <form method="post" class="register-form" id="register-form">@csrf
                             <div class="form-group">
                                <label for="first_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="first_name" id="first_name" required autocomplete="first_name" autofocus placeholder="First Name"/>
                            </div>
                            <div class="form-group">
                                <label for="sur_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="sur_name" id="sur_name"  required autocomplete="sur_name" autofocus
                                placeholder="Sur Name"/>
                            </div>
                            <div class="form-group">
                                <label for="phone_number"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="integer" name="phone_number" id="phone_number"  required autocomplete="phone_number" autofocus placeholder="Phone Number"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" required autocomplete="email" autofocus placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" required  autofocus placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="register" id="register" class="form-submit" value="Register"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="signup-image">

                        <figure><img src="{{asset('images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="{{ url('/frontend/login') }}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
                       

    </div>

    
</body>
</html>
