@extends("layouts.app")

@section("content")

  <!--HOME HERO IMAGE-->
  <div class="container ml-auto text-center">
    <div class="backImg-small">
      <h1>SEARCH FOR THE BEST BUSINESS FOR YOU</h1>
    </div>
  </div>
 
  <!--CATEGORIES MENU-->
  <div class="section site-portfolio container">
    <div class="row mb-5 align-items-center">
	    <a href="#">All&nbsp;&nbsp;</a>
        @foreach($categories as $category)
	        @if($category->parent_id == 0)
	          <a href="#"> {{$category->name }} &nbsp;&nbsp;</a>
	        @endif
        @endforeach
    </div>
  </div>
  
  <!--CATEGORIES RESULTS-->
  <div class="row">
    <!--SIDE BAR FOR SPECIFIC SEARCH-->
   	<div class="col-lg-3" style="padding-left: 0">

        <h5 class="my-4">Business Categories</h5>
        
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          @foreach($categories as $category)
			      @if($category->parent_id == 0)
			        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#" aria-selected="true">
				        {{$category->name }}
			        </a>
		        @endif
      	  @endforeach
        </div>

        <h5 class="my-4">More Specific</h5>

        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          @foreach($categories as $category)
			      @if($category->parent_id == 0)
				      <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#" aria-selected="true">
				        {{$category->name }}
			        </a>
		        @endif
      	@endforeach
        </div>

    </div>
    <!--END SIDE BAR FOR SPECIFIC SEARCH-->

    <!--SHOW RESULTS FROM SPECIFIC SEARCH-->
    <div class="col-lg-9 mt-4">
   		<div class="row">

   	  	@for($i = 0; $i < 15; $i++)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            </div>
          </div>
        @endfor
    </div>

  </div>

  
  <script type="text/javascript"></script>

</div>
@endsection
