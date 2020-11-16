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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients', 'App\Http\Controllers\ClientsController@index');
Route::get('subcategories/{id}', 'App\Http\Controllers\CategoryController@subcategories');


Route::resource("clients", ClientsController::class);
Route::get('/search', 'App\Http\Controllers\ClientsController@search');
