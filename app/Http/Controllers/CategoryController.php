<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function index()
	{
        	$categories = 'App\Models\Category'::with("childs")->where('parent_id', 0)->get(); 
		return view("categories.index", ['categories' => $categories]);
	}

	public function subcategories($id)
	{
		$subcategories = 'App\Models\Category'::where('parent_id', '=', $id)->get();
		return $subcategories;
	}
}
