@extends("layouts.app")

@section("content")
<div class="container">
<div class="row mt-4">
		<table class="table">
  <thead class="thead-dark">
    <tr>
      <th class="NameBusi" scope="col">Business name</th>
      <th class="CategoBusi" scope="col">Category</th>
      <th class="SubcategoBusi" scope="col">Subcategories</th>
      <th class="LocationBusi" scope="col">Location</th>
    </tr>
  </thead>
  <tbody>

    @foreach($clients as $client)
    <tr>
    	<td class="NameBusi"><a href="{{ $client->website }}">{{ $client->name}}</a></td>
    	<td class="CategoBusi">{{ $client->category }}</td>
    	<td class="SubcategoBusi">{{ $client->subcategory }}</td>
    	<td class="LocationBusi">{{ $client->location}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
	</div>
</div>

@endsection
