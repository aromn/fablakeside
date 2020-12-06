@extends("layouts.app")

@section("content")

  <!--HOME HERO IMAGE-->
  <div class="container ml-auto text-center">
    <div class="backImg-small">
      <h1>SEARCH FOR THE BEST BUSINESS FOR YOU</h1>
    </div>
  </div>
 
  <!--CATEGORIES MENU-->
  <div class="container p-4">
    <div class="row align-items-center filters">
      <div col-md-12 col-lg-12 text-center text-lg-center>
	    <a href="#">All&nbsp;&nbsp;</a>
        @foreach($categories as $category)
	        @if($category->parent_id == 0)
	          <a href="#"> {{$category->name }} &nbsp;&nbsp;</a>
	        @endif
        @endforeach
      </div>
    </div>
  </div>
 
  <!--CATEGORIES RESULTS-->
  <div class="container">
  <div class="row">
    <!--SIDE BAR FOR SPECIFIC SEARCH-->
   	<div class="col-lg-3 col-sm-12 col-xs-12">

        <h5 class="my-4">Business Categories</h5>
        <span class="line"></span>
        <div class="nav flex-column nav-pills searchList" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" category="All" id="v-pills-home-tab" data-toggle="pill" href="{{ route('specialBusiness1') }}" aria-selected="true">
                All
              </a>
          @foreach($categories as $category)
			      @if($category->parent_id == 0)
				<a class="nav-link"  category="{{ $category->slug }}" id="v-pills-home-tab" data-toggle="pill" href="{{ url('business_categories', $category->slug) }}" aria-selected="true">
				        {{$category->name }}
			        </a>
		        @endif
      	  @endforeach
        </div>

        <h5 class="my-4">More Specific</h5>
        <span class="line"></span>  
        <div class="nav flex-column nav-pills searchList" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          @foreach($subcategories as $subcategory)
			      @if($subcategory->parent_id == 0)
				      <a class="nav-link" id="v-pills-home-tab"  data-toggle="pills" href="{{ url('business_categories', $category->slug) }}" aria-selected="true">
				        {{$subcategory->name }}
			        </a>
		        @endif
      	@endforeach
        </div>

    </div>
    <!--END SIDE BAR FOR SPECIFIC SEARCH-->
<!--SHOW RESULTS FROM SPECIFIC SEARCH-->
    <div class="col-lg-9 mt-4">
   		<div class="row">
<table class="table table-clients">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Business name</th>
      <th scope="col">Category</th>
      <th scope="col">Subcategories</th>
      <th scope="col">Location</th>
    </tr>
  </thead>
  <tbody>
    @foreach($clients as $client)
    <tr>
    	<td>{{ $client->name}}</td>
    	<td>{{ $client->category }}</td>
    	<td>{{ $client->subcategory }}</td>
    	<td>{{ $client->location}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
   	  
    </div>

  </div>

  </div>
</div>

  <!--HOME ACTION IMAGE-->
<div class="container ml-auto text-center">
  <div class="callActionSection" style="background-image: url('img/infoSectionImg.png');">
    <h1>ADD YOUR BUSINESS</h1>
    <h4>Your business name could be here!</h4>
    <br>
    <a href="#" class="buttonList">Learn How</a>
  </div>
</div>
   <script type="text/javascript">
    $('.table-clients').DataTable();
    $('#v-pills-tab > a').on('click', function(e){
        console.log($(this)[0].attributes.category.value);
        // Avoid reloading the page.
        e.preventDefault();

        // Removing last results of the table's body.
        $('.table-clients tbody').empty();
        $.ajax({
          url: '/business_categories/' + $(this)[0].attributes.category.value,
          type: 'GET',
          success: function(e){
            $.each(e, function(i, v){
              $('.table-clients').append('<tr><td>' + v.name + '</td><td>' + v.category + '</td><td>' + v.subcategory + '</td><td>' + v.location + '</td></tr>');
            });
            
          }
        });

    });
  </script>
  <script type="text/javascript"></script>

</div>
@endsection
