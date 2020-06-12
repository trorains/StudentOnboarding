<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Insertion HTML5 Template</title>



  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"/>                                          
  <link rel="stylesheet" href="{{asset('css/frontend_css/fontawesome-all.min.css')}}" />                     
  <link rel="stylesheet" href="{{asset('css/frontend_css/tooplate-style.css')}}" />

  <script>
    var renderPage = true;

    if (navigator.userAgent.indexOf('MSIE') !== -1
      || navigator.appVersion.indexOf('Trident/') > 0) {
      /* Microsoft Internet Explorer detected in. */
      alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
      renderPage = false;
    }
  </script>

</head>

<body>

  

  <div class="tm-main">

    

    <div class="container">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="tm-tag-line">
          <h2 class="tm-tag-line-title">Music is your powerful energy.</h2>
          </div>
        </div>
      </div>

      <div class="row mb-5">
        <div class="col-xl-12">
          <div class="media-boxes">
            <div class="media">
              <img src="img/insertion-140x140-01.jpg" alt="Image" class="mr-3">
              <div class="media-body tm-bg-gray">
                <div class="tm-description-box">
                  <h5 class="tm-text-blue">Course Name</h5>
                  <p class="mb-0"> Description</p>
                </div>
                <div class="tm-buy-box">
                  <a href="#" class="tm-bg-blue tm-text-white tm-buy">Enroll</a>
                  <span class="tm-text-blue tm-price-tag">Department</span>
                </div>
              </div>
            </div>

            
          </div> <!-- media-boxes -->
        </div>
      </div>

      
      
    </div> <!-- .container -->

  </div> <!-- .main -->





  <script src="{{ asset('js/backend_js/bootstrap.min.js') }} "></script> 
 <script src="{{ asset('js/frontend_js/jquery-3.2.1.slim.min.js') }} "></script> 
</body>
</html>