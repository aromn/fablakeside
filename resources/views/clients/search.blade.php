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
    </tr>
  </thead>
  <tbody>

    @foreach($clients as $client)
    <tr>
    	<td>{{ $client->business_name }}</td>
    	<td>{{ $client->category->name }}</td>
    	<td>{{ $client->subcategory1_id }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
	</div>
</div>

@endsection