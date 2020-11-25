@extends("layouts.app")

@section("content")
<div class="container">
<div class="row mt-4">
		<table class="table">
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

@endsection
