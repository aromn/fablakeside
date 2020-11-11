@extends("layouts.app")

@section("content")
<style type="text/css">
	
#custom-search-input {
        margin:0;
        margin-top: 10px;
        padding: 0;
        width: 100%;
    }
 
    #custom-search-input .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
 
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
 
 
    .search-query:focus + button {
        z-index: 3;   
    }
</style>


    <div class="row mt-4">
        <div class="col-md-2">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select category
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                 @foreach($categories as $category)
                <a class="dropdown-item" href="{{ url('category/{id}', $category->id) }}" value="{{ $category->name }}">{{ $category->name }}</a>
                @endforeach
              </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
               <label for="sel1">Subcategory</label>
               <select class="form-control" id="sel2">
                
                @foreach($categories as $subcategory)
                    @if($subcategory->childs->count() > 0)
                        @foreach($subcategory->childs as $subcat)
                            <option value="{{ $subcategory->name }}">{{ $subcat->name }}</option>
                        @endforeach
                    @endif
                @endforeach
               </select>
            </div>
        </div>
	</div>

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