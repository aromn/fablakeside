<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Intermediate</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
<link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script> 
        <script type="text/javascript" src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    
<div class="container">
    <div class="row mt-4">
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
