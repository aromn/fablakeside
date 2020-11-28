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
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown09">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-md-0" _lpchecked="1">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
          </form>
        </div>
      </nav>
<div class="container">
    <div class="row">
        <form type="get" action="{{ url('/search') }}" style="width: 100%;">
           <div id="custom-search-input" style="display: flex;">
                            <div class="input-group col-md-10">
                                <input type="search" name="query" class="  search-query form-control" placeholder="Search" />
                            </div>
                            <div class="input-group col-md-4">
                                <button class="btn btn-primary" style="width: 50%;" type="submit">Search
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                            </div>
                            
                        </div>
<div class="row mt-4">
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
    @yield('content')

</body>
</html>
