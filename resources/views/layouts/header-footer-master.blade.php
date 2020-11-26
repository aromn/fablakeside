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
        	<form type="get" action="{{ url('/search') }}" style="width: 100%;">
                <div class="col-md-12">
                  <div class="input-group">
                  <!--Search Form-->
                    <input type="search" class="form-control" name="query" id="search" placeholder="Search from all the Business">
                  <!--Search Button--> 
                    <button class="btn btn-default" type="submit">
                    <span><img src="{{ asset('vendor/bootstrap-icons-1.1.0/search.svg') }}"></span>
                    </button>
                    <span class="input-group-btn"></span>
                </div>
                </div>
		</form>
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

      <!--MENU-->    
    <!--Navbar-->
    <div class="container menuBar mx-auto">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Menu -->
        <div class="container-fluid">
          
        <!-- Search Form-->
        <div class="d-sm-block d-md-none navbar-brand left-search">
          <form class="form-inline input-group">
            <input class="form-control mr-sm-1" type="search" placeholder="All business" aria-label="Search">
            <button class="btn btn-default" type="submit">
              <span>
                <img src="{{ asset('vendor/bootstrap-icons-1.1.0/search.svg') }}">
              </span>
            </button>
            <span class="input-group-btn"></span>
          </form>
        </div>

        <button class="navbar-toggler navbar-toggler-right hamburguer" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          
        <div class="collapse navbar-collapse" id="navbarResponsive">

              <ul class="navbar-nav mx-auto text-center" id="menuLinks">
                <li class="nav-item active" id="active">
                  <a class="nav-link" href="{{ route('home1') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('specialBusiness1') }}">Business Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('listBusiness1') }}">List Your Business</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('ourTeam1') }}">Our Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact1') }}">Contact</a>
                </li>
              </ul>

              <hr class="d-sm-block d-md-none">
              
              <!--LENGUAGE-->
              <div class="d-sm-block d-md-none">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home1') }}">ENG</a>
                    <span class="sr-only">(current)</span>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ESP</a>
                  </li>
                </ul> 
              </div>
              <!--LENGUAGE END-->
        </div>
        </div>
      </nav>
    </div>
    </div>
  </section>

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
</html>
