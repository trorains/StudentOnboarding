
<html>
<head>
    <title>Sign In form</title>
        <!--Style Assets--> 
        <link rel="stylesheet" type="text/css" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/error.css') }}" > 

        <!-- Javascript -->
        <script src="{{asset('js/jquery/jquery.min.js')}}"></script>  
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/backend_js/jquery.min.js')}}"></script>  
        <script src="{{asset('js/backend_js/matrix.login.js')}}"></script>
        <script src="{{asset('js/close.js')}}"></script>  
        


</head>


<body>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{asset('images/signin-image.jpg')}}" alt="sing up image"></figure>
                        <a href="{{ url('/frontend/register') }}" class="signup-image-link">Join School Today!</a>
                    </div>

                    <div class="signin-form">

                         @if(Session::has('flash_message_error'))
                            <div class="bar error">
                                        <span class="aico">&#9747;</span>
                                        <span class="close">X</span>
                                                &#9747; {!! session('flash_message_error') !!}
                                 </div>
                         @endif

                         @if(Session::has('message'))
    
                            <div class="bar success">
                                        <span class="aico">&#9747;</span>
                                        <span class="close">X</span>
                                                &#9747; {!! session('message') !!}
                                 </div>
                         @endif

                        <h2 class="form-title">Sign Into School </h2>
                        <form method="post" class="register-form" id="login-form" action="{{ url('/frontend/login') }}">@csrf
                            <div class="form-group">
                                <label for="Email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                
                                <input type="text" name="email" id="email" placeholder="Your Email"/>
                            </div>
                           <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
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
                </div>
            </div>
        </section>

    </div>

</body>