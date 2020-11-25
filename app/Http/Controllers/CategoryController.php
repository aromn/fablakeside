<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function index()
	{
		$categories = 'App\Models\Category'::all();
		return view("categories.index", ['categories' => $categories]);
	}

	public function subcategories($id)
	{
		$subcategories = 'App\Models\Category'::where('parent_id', '=', $id)->get();
		return $subcategories;
	}
}
