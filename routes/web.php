<?php

use App\Http\Controllers\ClientsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::redirect('/', '/en');

Route::group(['prefix' => '{language}'], function () {
	Route::get('/', function () {
	    return view('home');
	})->name('home1');

	Route::get('/clients', 'App\Http\Controllers\ClientsController@index');
	Route::get('subcategories/{id}', 'App\Http\Controllers\CategoryController@subcategories');
	Route::get('/business_categories', 'App\Http\Controllers\CategoryController@index')->name('specialBusiness1');
	Route::get('/business_categories/{category_id}/{subcategory_id?}', 'App\Http\Controllers\ClientsController@clientsByCategory');

	Route::resource("clients", ClientsController::class);
	Route::get('/search', 'App\Http\Controllers\ClientsController@search');

	/* Routes to HTML Pages */

	Route::get('specialBusiness', function () {
	    return view('specialBusiness');
	});

	Route::get('listBusiness', function () {
	    return view('listBusiness');
	})->name('listBusiness1');

	Route::get('ourTeam', function () {
	    return view('ourTeam');
	})->name('ourTeam1');

	Route::get('contact', function () {
	    return view('contact');
	})->name('contact1');

	Route::get('signup_business', 'App\Http\Controllers\ClientsController@signupRequest')->name('contact.request');
	Route::get('contact_us', 'App\Http\Controllers\ClientsController@contactRequest')->name('contact.us');
});

