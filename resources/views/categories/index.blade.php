@extends("layouts.app")

@section("content")

   <div class="row mt-4">
	<a href="#">All&nbsp;&nbsp;</a>
      @foreach($categories as $category)
	@if($category->parent_id == 0)
	<a href="#"> {{$category->name }} &nbsp;&nbsp;</a>
	@endif
      @endforeach
   </div>
   <div class="row">
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
   <script type="text/javascript">
   </script>

</div>
@endsection
