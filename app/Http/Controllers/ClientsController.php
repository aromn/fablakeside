<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use App\Models\Category;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::with("category")->get();
        $categories = 'App\Models\Category'::with("childs")->where('parent_id', 0)->get(); 
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

    public function search()
    {
        $search_text = $_GET['query'];
	$location = $_GET['location'];
	$category= $_GET['category'];
        $categories = 'App\Models\Category'::with("childs")->where('parent_id', 0)->get(); 

	if($category != '')
		$clients = Clients::where('business_name', 'LIKE', '%'.$search_text.'%')
		   ->where('location', 'LIKE', '%'.$location.'%')
		   ->where('category_id', '=', $category)
		   ->with('category')->get();
	else
		$clients = Clients::where('business_name', 'LIKE', '%'.$search_text.'%')
		   ->where('location', 'LIKE', '%'.$location.'%')
		   ->with('category')->get();

        return view("clients.search", ['clients' => $clients, 'categories' => $categories]);
    }
}
