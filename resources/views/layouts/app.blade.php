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


<body id="app-layout">

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
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('home1') }}">Home</a>
                </li>
                <li class="nav-item active" id="active">
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

  <!--SECTION SEARCH-->
  <div class="container">
    <div class="row">
        <form type="get" action="{{ url('/search') }}" style="width: 100%;">

            <!--input search-->
            <div id="custom-search-input" style="display: flex;">
                <div class="input-group col-md-10">
                    <input type="search" 
                            name="query" 
                            class="search-query form-control" 
                            placeholder="Search" />
                </div>
                <div class="input-group col-md-4">
                    <button class="btn btn-primary" style="width: 50%;" type="submit">Search
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </div>                            
            </div>

            <!--Select Input Categories-->
            <div class="row mt-4">
                <!--location-->
                <div class="col-md-2">
                    <div class="form-group">
                        <select name="location" class="form-control" id="sel2">
                            <option value="">Select a location</option>
                            <option value="Ajijic">Ajijic</option>
                            <option value="Chapala">Chapala</option>
                            <option value="Ixtlahuacan">Ixtlahuacán de los M.</option>
                            <option value="San Antonio">San Antonio</option>
	                    </select>
                    </div>
                </div>
                <!--categories-->
                <div class="col-md-2">
                    <div class="form-group">
                        <select name="category" class="form-control" id="categories">
                            <option value="">Select a category</option>
		                        @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
		                        @endforeach
	                    </select>
                    </div>
                </div>
                <!--subcategories-->
                <div class="col-md-2">
                    <div class="form-group">
                        <select name="subcategory" class="form-control" id="subcategories">
                            <option value="" default>Select a subcategory</option>
                        </select>
                    </div>
                </div>

	            <script>
	            $('#categories').change(function(){
		            if($(this).val() == ""){
			            $('#subcategories option').each(function(){
			                $(this).remove();
		                });
			            $('#subcategories').append('<option value="">Select a subcategory</option>');
			            $('#subcategories').prop("disabled", true);
                	    return false;
		            }

		            $('#subcategories option').each(function(){
			            $(this).remove();
		            });

		            $.ajax({
		                url: 'subcategories/' + $(this).val(),
	    	            type: 'GET',
		                success: function(e){
			                $('#subcategories').removeAttr("disabled");
			                $('#subcategories').append('<option value="">Select a subcategory</option>');
		                    $.each(e, function(index, value){
		                        console.log(value);
                                $('#subcategories').append('<option value="' + value.id + '">' + value.name + '</option>');
		                    });
		                }
	   	            });
	            });
	            </script>
            </div>
        </form>
    </div>
</div>

@yield('content')

</body>
</html>
