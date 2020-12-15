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

    <!-- Datatable styles & script-->
    <link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>

  </head>


<body id="app-layout">
    
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
   </div>
</form>


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
