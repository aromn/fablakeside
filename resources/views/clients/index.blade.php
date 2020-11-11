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
<div class="container">
	<div class="row">
           <div id="custom-search-input" style="display: flex;">
                            <div class="input-group col-md-8">
                                <input type="text" class="  search-query form-control" placeholder="Search" />
                            </div>
							<div class="input-group col-md-2">
								<button class="btn btn-primary" type="button">Search
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
							</div>
                            
                        </div>
	</div>
</div>
@endsection