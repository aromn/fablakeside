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

 <!--MENU TOP BAR-->
 <div class="container navbar-light bg-light rounded px-3">
  <header class="blog-header px-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-2">
        <a class="navbar-brand" href="{{ route('home1') }}"><img src="{{ asset('img/logo1.png') }}" style="width: 80px; height: auto;"></a>
      </div>

      <div class="col-8 text-center">

        <nav class="navbar navbar-expand-lg ">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarResponsive" >
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('home1') }}">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link active" href="{{ route('specialBusiness1') }}">Business Categories</a>
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
            </div>
          </div>
        </nav>

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

<!--HOME HERO IMAGE-->
<div class="container ml-auto text-center">
  <div class="backImg-small">
    <h1>SEARCH FOR THE BEST BUSINESS FOR YOU</h1>
  </div>
</div>

<!--SERACH BAR WITH CATEGORIES AND SUB CATEGORIES-->
<div class="container">
  <div class="row mt-4">
      <form type="get" action="{{ url('/search') }}" style="width: 100%;">
          <div id="custom-search-input" style="display: flex;">
              <div class="input-group col-md-10" style="padding-left: 0">
                  <input type="search" name="query" class="  search-query form-control" placeholder="Search" />
              </div>
              <div class="input-group col-md-4">
                  <button class="btn btn-primary" style="width: 50%;" type="submit">Search
                  <span class=" glyphicon glyphicon-search"></span>
                  </button>
              </div>
          </div>
          <div class="row mt-4">
              <div class="col-md-4">
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
          </div>
          <div class="col-md-4">
              <div class="form-group">
                  <select name="category" class="form-control" id="categories">
                      <option value="">Select a category</option>
                      @foreach($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                </select>
              </div>
          </div>
          <div class="col-md-4">
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
      </form>
  </div>
</div>


<!--SECTION SEARCH-->

@yield('content')

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
