@extends("layouts.app")

@section("content")
<div class="container">
   <div class="row mt-4">
	<a href="#">All&nbsp;&nbsp;</a>
      @foreach($categories as $category)
	@if($category->parent_id == 0)
	<a href="#"> {{$category->name }} &nbsp;&nbsp;</a>
	@endif
      @endforeach
   </div>
</div>
@endsection
