<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Por defecto -->
    <title>Find a Business Ajijic</title>
    <!--Favicon-->
    <link rel="icon" 
      type="image/png" 
      href="{{ asset('img/favicon.png')}}">

    <!--DESCRIPCION PARA GOOGLE-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="We Make it Easy for Both Businesses and Customers">
    <meta name="author" content="FAB Ajijic by Alex Sealers">

    <!--FONT :: Poppins-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <!--EDGE NAVEGADOR-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--SCRIPTS-->

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
     <!--Template Main JS File-->
    <script src="{{ asset('js/main.js') }}"></script>

    <!--BOOTSTRAP SCRIPT-->
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!--AOS EFFECTS FADING AND MORE -->
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Vendor - Bootstrap CSS Files -->
    <link href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" >
    <!-- Propios estilos -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    
</head>
<body>

   <!--MENU TOP BAR-->
   <div class="container navbar-light bg-light rounded px-3">
    <header class="blog-header px-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-2">
          <a class="navbar-brand" href="{{ route('home1') }}"><img src="{{ asset('img/logo1.png') }}" style="width: 80px; height: auto;"></a>
        </div>

        <div class="col-8 text-center">

          @yield('NavBar')

        </div>
        <div class="col-2 d-flex justify-content-end align-items-center">
          <a class="link-secondary" href="{{ route('specialBusiness1') }}" aria-label="Search">
            <svg 
            xmlns="http://www.w3.org/2000/svg" 
            width="20" height="20" 
            class="mx-3" 
            role="img" 
            viewBox="0 0 24 24">
                <title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/>
                <path d="M21 21l-5.2-5.2"/>
            </svg>
          </a>
          <a class="btn btn-sm btn-outline-primary px-1" href="{{ route('home1') }}">ENG</a>
          <a class="btn btn-sm btn-outline-secondary px-1" href="">ESP</a>
        </div>
      </div>      
    </header>
  </div>
  <!-- end MENU TOP BAR-->

  <!-- BACK TO TOP -->
  <a id="back-to-top" href="#" class="btn btn-sm back-to-top" role="button">
    <img src="{{ asset('img/icons/upArrow.png') }}" style="width: 45%;">
  </a>

  <main>
    <!-- CONTENT -->
  <div class="">
    @yield('section')
  </div>
  </main>

  <footer>
    <div class="container footer">
      <div class="row">
        <div class="col-sm-2 text-center align-self-center">
          <a href="{{ route('home1') }}"><div class="fabLakeSide mx-4"></div></a>
        </div>
        <div class="col-sm-8 text-center align-self-center py-2">
          <a href="#"><h2>(+52) 33 1347 8461</h2></a>
          <p>&copy; 2020 by Find-A-Business Ajijic</p>
        </div>
        <div class="col-sm-2 text-center align-self-center">
          <a href="#"><span class="icon FaceIcon"></span></a>
        </div>
      </div>
    </div>
  
    <div class="container endColor text-center copyRight">
      <div class="row">
        <div class="col-12">
          <p>An Alex Searles and Ajijic Business Enterprises Ltd. Product</p>
        </div>
      </div>
    </div>
  </footer>

  </body>
  <script src="{{ asset('js/app.js') }}"></script>

   <!--Template Main JS File-->
  <script src="{{ asset('js/main.js') }}"></script>

  <!--BOOTSTRAP SCRIPT-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!--AOS EFFECTS FADING AND MORE -->
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.j') }}"></script>

  <!--BACK TO TOP FUNCTION-->
  <script>
    $(document).ready(function(){
	    $(window).scroll(function () {
			  if ($(this).scrollTop() > 50) {
				  $('#back-to-top').fadeIn();
			  } else {
				  $('#back-to-top').fadeOut();
			  }
		  });
		// scroll body to 0px on click
		  $('#back-to-top').click(function () {
			  $('body,html').animate({
				  scrollTop: 0
			  }, 400);
			  return false;
		  });
    });
  </script>
</html>
