

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
<meta charset="UTF-8" />
<link rel="icon" 
      type="image/png" 
      href="/images/master/logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/uniform.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/fullcalendar.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-styles.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-media.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/sweetalert.css') }}" />
<link href="{{ asset('css/backend_css/font-awesome.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/backend_css/jquery.gritter.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-wysihtml5.css') }}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>

@include('layouts.masterLayout.admin_header')

@include('layouts.masterLayout.admin_sidebar')

@yield('content')

@include('layouts.masterLayout.admin_footer')


<script src="{{ asset('js/backend_js/jquery.min.js') }} "></script> 
<!-- <script src="{{ asset('js/backend_js/jquery.ui.custom.js') }} "></script> --> 
<script src="{{ asset('js/backend_js/bootstrap.min.js') }} "></script> 
<script src="{{ asset('js/backend_js/jquery.uniform.js') }} "></script> 
<script src="{{ asset('js/backend_js/select2.min.js') }} "></script> 
<script src="{{ asset('js/backend_js/jquery.validate.js') }} "></script> 
<script src="{{ asset('js/backend_js/jquery.dataTables.min.js') }} "></script> 
<script src="{{ asset('js/backend_js/matrix.js') }} "></script> 
<script src="{{ asset('js/backend_js/matrix.form_validation.js') }} "></script>
<script src="{{ asset('js/backend_js/matrix.tables.js') }}"></script>
<script src="{{ asset('js/backend_js/matrix.popover.js') }}"></script>
<script src="{{ asset('js/backend_js/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/backend_js/wysihtml5-0.3.0.js') }}"></script>
<script src="{{ asset('js/backend_js/bootstrap-wysihtml5.js') }}"></script>
<script>
	$('.textarea_editor').wysihtml5();
	$('.textarea_care').wysihtml5();
</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>
