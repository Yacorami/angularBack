<?php
use Illuminate\Foundation\Application;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('pages.home');
});

Route::get('about', function()
{
    return View::make('pages.about');
});

Route::get('projects', function()
{
    return View::make('pages.projects');
});

Route::get('contact', function()
{
    return View::make('pages.contact');
});

Route::get('instruments', function()
{
    return View::make('pages.instruments');
});

Route::get('categories', 'InstrumentController@getInstruCat');


Route::group(array('prefix' => 'api'), function() {
    Route::resource('instruments', 'InstrumentController', 
        array('only' => array('index', 'store', 'destroy')));
  
});


Route::get('/api/categories','CategoryController@getAll');

Route::any('{catchall}', function() {
  return View::make('pages.home');
})->where('catchall', '.*');