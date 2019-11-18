<?php

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
    return view('index');
});

Route::get('index', function () {
    return view('index');
});
// Route::get('/', 'RotaryController@showIndexPage');
Route::get('rotary', 'RotaryController@showrotaryPage');
Route::get('rotary_readmore/{id}', 'RotaryController@showrotary_readmorePage');
Route::get('rotary_pressure_joints', 'RotaryController@showrotary_pressure_joints');
Route::get('syphon_system', 'RotaryController@showsyphon_system');
Route::get('carbon_rings', 'RotaryController@showcarbon_rings');
Route::get('accessories', 'RotaryController@showaccessories');

Route::get('ball_valve', 'RotaryController@showball_valve');
Route::get('butterfly_valve', 'RotaryController@showbutterfly_valve');
Route::get('gate_valve', 'RotaryController@showgate_valve');
Route::get('globe_valve', 'RotaryController@showglobe_valve');
Route::get('check_valve', 'RotaryController@showcheck_valve');

Route::get('stationary_syphon', 'RotaryController@showstationary_syphon');
Route::get('rotating_syphon', 'RotaryController@showrotating_syphon');
Route::get('monoflow_application', 'RotaryController@showmonoflow_application');
Route::get('roto_seals', 'RotaryController@showroto_seals');

// admin 

Route::get('adminIndex', function () {
    return view('adminIndex');
});

// product
Route::get('product', 'AdminController@showProduct');
Route::get('deleteproduct', 'AdminController@deleteproduct');
Route::POST('editproduct', 'AdminController@editproduct');

Route::get('subProduct', 'AdminController@showSubProduct');
Route::get('subtosubProduct', 'AdminController@showSubtosubProduct');

Route::POST('storeproductdata', 'AdminController@storeProduct');
Route::POST('addsubproduct', 'AdminController@addsubproduct');
Route::POST('addsubtosubproduct', 'AdminController@addsubtosubproduct');

Route::group(array('prefix' => 'subtosub'), function()
{
 Route::get('/{id}/{name}', 'AdminController@showsubtosubpage');   
});

Route::group(array('prefix' => 'sub'), function()
{
 Route::get('/{id}/{name}', 'AdminController@showsubpage');   
});

Route::get('productdescription', 'AdminController@showProductDescription');
Route::POST('productdefination', 'AdminController@productdefination');