<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Por defecto -->
    <title>Find a Business Ajijic</title>
    <!--Favicon-->
    <link rel="icon" 
      type="image/png" 
      href="#">

    <!--DESCRIPCION PARA GOOGLE-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="We Make it Easy for Both Businesses and Customers">
    <meta name="author" content="FAB Ajijic by Alex Sealers">

    <!--FONT :: Poppins-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
    <!--EDGE NAVEGADOR-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Vendor - Bootstrap CSS Files -->
    <link href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('vendor/line-awesome/css/line-awesome.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" >
    <!-- Propios estilos -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    
</head>
<body>

  <section alt="Top Header">
    <div class="container-fluid bg-light position-fixed" style="z-index: 10;"> 
      <!--TOP BAR LG SCREENS--> 
      <div class="container topBar mt-3 d-none d-lg-block">
        <div class="row">
          <!-- BRAND LOGO -->
          <div class="col-md-2">
          <a class="navbar-brand" href="{{ route('home1') }}">
            <img src="{{ asset('img/logo1.png') }}" style="width: 40%; height: auto;">
          </a>
          </div>
          <!-- SEARCH FORM -->
          <div class="col-md-8">
            <div class="container-fluid">
              <div class="row justify-content-md-center">
                <!--Search Form--> 
                <div class="col-md-12">
                  <div class="input-group">
                  <!--Search Form-->
                    <input type="hidden" name="search_param" value="all" id="search_param">
                    <input type="text" class="form-control" name="x" id="search" placeholder="Search from all the Business">
                  <!--Search Button--> 
                    <button class="btn btn-default" type="button">
                    <span><img src="{{ asset('vendor/bootstrap-icons-1.1.0/search.svg') }}"></span>
                    </button>
                    <span class="input-group-btn"></span>
                </div>
                </div>
                <!--Search Form END--> 
              </div>
            </div>
          </div>
          <!--LENGUAGE-->
          <div class="col-md-2 lenguage">
            <ul>
              <li><a href="{{ route('home1') }}"><p class="ActiveLink">ENG</p></a></li>
              <li><a href="#"><p>ESP</p></a></li>
            </ul> 
          <!--LENGUAGE END-->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--SCRIPTS-->
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
</body>
</html>