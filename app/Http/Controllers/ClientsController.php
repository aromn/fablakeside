<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = 'App\Models\Category'::with("childs")->where('parent_id', 0)->get(); 
	$clients = DB::table('clients')->select(DB::raw('business_name as name, location, category_id, subcategory_id, c1.name as category, c2.name as subcategory'))
			->leftJoin('categories as c1', 'c1.id', 'clients.category_id')
			->leftJoin('categories as c2', 'c2.id', 'clients.subcategory_id')
			->get();
        return view("clients.index", ["clients" => $clients, "categories" => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(Clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(Clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clients $clients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clients $clients)
    {
        //
    }

    public function clientsByCategory(string $category_id, string $subcategory_id = '')
    {
	    if($subcategory_id != '') {
	    	$clients = DB::table('clients')->select(DB::raw('business_name as name, location, category_id, subcategory_id, c1.name as category, c2.name as subcategory, c1.slug as category_slug, c2.slug as subcategory_slug'))
				->leftJoin('categories as c1', 'c1.id', 'clients.category_id')
				->leftJoin('categories as c2', 'c2.id', 'clients.subcategory_id')
               			->where('c1.id', '=', $category_id)
               			->where('c2.id', '=', $subcategory_id)
				->get();
                $subcategories = 'App\Models\Category'::where('parent_id', '=', $category_id)->get();
        }
	    else {
	       $clients = DB::table('clients')->select(DB::raw('business_name as name, location, category_id, subcategory_id, c1.name as category, c2.name as subcategory, c1.slug as category_slug, c2.slug as subcategory_slug'))
				->leftJoin('categories as c1', 'c1.id', 'clients.category_id')
				->leftJoin('categories as c2', 'c2.id', 'clients.subcategory_id')
               			->where('c1.id', '=', $category_id)
				->get();
            $subcategories = 'App\Models\Category'::where('parent_id', '=', $category_id)->get();
        }

        if ($category_id == '0') {
            $clients = DB::table('clients')->select(DB::raw('business_name as name, location, category_id, subcategory_id, c1.name as category, c2.name as subcategory'))
            ->leftJoin('categories as c1', 'c1.id', 'clients.category_id')
            ->leftJoin('categories as c2', 'c2.id', 'clients.subcategory_id')
            ->get();
        }
        $result = [];
        $result['clients'] = $clients;
        $result['subcategories'] = $subcategories; 
	    return $result;
    }

    public function search()
    {
        $search_text = isset($_GET['query']) ? $_GET['query'] : '';
    	$location = isset($_GET['location']) ? $_GET['location'] : '';
    	$category = isset($_GET['category']) ? $_GET['category'] : '';
    	$subcategory = isset($_GET['subcategory']) ? $_GET['subcategory'] : '';
        $categories = 'App\Models\Category'::with("childs")->where('parent_id', 0)->get(); 
        $subcategories = 'App\Models\Category'::with("childs")->where('parent_id', '!=', 0)->get(); 

	// Display all clients.
	if($category == '' && $subcategory == '' && $location == '' && $search_text == '') {
		$clients = DB::table('clients')->select(DB::raw('business_name as name, location, category_id, subcategory_id, c1.name as category, c2.name as subcategory'))
				->leftJoin('categories as c1', 'c1.id', 'clients.category_id')
				->leftJoin('categories as c2', 'c2.id', 'clients.subcategory_id')
				->get();
	} // Query value.
	elseif ($search_text != "" && $category == "" && $location == "" && $subcategory == "") {
		$clients = DB::table('clients')->select(DB::raw('business_name as name, location, category_id, subcategory_id, c1.name as category, c2.name as subcategory'))
				->leftJoin('categories as c1', 'c1.id', 'clients.category_id')
				->leftJoin('categories as c2', 'c2.id', 'clients.subcategory_id')
				->where('business_name', 'like', '%'.$search_text.'%')
				->get();
        } // Query value with location.
	elseif ($search_text != "" && $category == "" && $location != "" && $subcategory == "") {
		$clients = DB::table('clients')->select(DB::raw('business_name as name, location, category_id, subcategory_id, c1.name as category, c2.name as subcategory'))
				->leftJoin('categories as c1', 'c1.id', 'clients.category_id')
				->leftJoin('categories as c2', 'c2.id', 'clients.subcategory_id')
				->where('business_name', 'like', '%'.$search_text.'%')
				->where('location', 'LIKE', '%'.$location.'%')
				->get();
        }
	// Location filter with category and subcategory null.
	elseif ($category == "" && $location != "" && $subcategory == "") {
		$clients = DB::table('clients')->select(DB::raw('business_name as name, location, category_id, subcategory_id, c1.name as category, c2.name as subcategory'))
				->leftJoin('categories as c1', 'c1.id', 'clients.category_id')
				->leftJoin('categories as c2', 'c2.id', 'clients.subcategory_id')
				->where('location', 'LIKE', '%'.$location.'%')
               			->where('business_name', 'LIKE', '%'.$search_text.'%')
				->get();
        } // Category filter with location and subcategory null.
    	elseif($category != '' && $location == '' && $subcategory == '') {
		$clients =DB::table('clients')->select(DB::raw('business_name as name, location, category_id, subcategory_id, c1.name as category, c2.name as subcategory'))
				->leftJoin('categories as c1', 'c1.id', 'clients.category_id')
				->leftJoin('categories as c2', 'c2.id', 'clients.subcategory_id')
				->where('category_id', '=', $category)
               			->where('business_name', 'LIKE', '%'.$search_text.'%')
				->get();
        } // Subcategory filter with category value and location  null.
        elseif ($category != "" && $location == "" && $subcategory != "") {
		$clients =DB::table('clients')->select(DB::raw('business_name as name, location, category_id, subcategory_id, c1.name as category, c2.name as subcategory'))
				->leftJoin('categories as c1', 'c1.id', 'clients.category_id')
				->leftJoin('categories as c2', 'c2.id', 'clients.subcategory_id')
				->where('category_id', '=', $category)
				->where('subcategory_id', '=', $subcategory)
               			->where('business_name', 'LIKE', '%'.$search_text.'%')
				->get();
        } // Lcation filter with category value and subcategory null.
        elseif ($category != "" && $location != "" && $subcategory == "") {
		$clients =DB::table('clients')->select(DB::raw('business_name as name, location, category_id, subcategory_id, c1.name as category, c2.name as subcategory'))
				->leftJoin('categories as c1', 'c1.id', 'clients.category_id')
				->leftJoin('categories as c2', 'c2.id', 'clients.subcategory_id')
				->where('category_id', '=', $category)
               			->where('location', 'LIKE', '%'.$location.'%')
               			->where('business_name', 'LIKE', '%'.$search_text.'%')
				->get();
        } // Lcation filter with category and subcategory value.
        elseif ($category != "" && $location != "" && $subcategory != "") {
		$clients =DB::table('clients')->select(DB::raw('business_name as name, location, category_id, subcategory_id, c1.name as category, c2.name as subcategory'))
				->leftJoin('categories as c1', 'c1.id', 'clients.category_id')
				->leftJoin('categories as c2', 'c2.id', 'clients.subcategory_id')
				->where('category_id', '=', $category)
				->where('subcategory_id', '=', $subcategory)
               			->where('location', 'LIKE', '%'.$location.'%')
               			->where('business_name', 'LIKE', '%'.$search_text.'%')
				->get();
        }
    	

	
        return view("clients.search", ['clients' => $clients, 'categories' => $categories, 'subcategories' => $subcategories]);
    }
}
