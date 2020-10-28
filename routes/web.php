<?php

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('homepage');
//------------>>>>>>----------- After Adding Controller Can Write -------------
 Route::get('/', 'MainController@welcome')->name('homepage');



// Route::get('testing',function($value='')
// {
// 	return 'Testing Page';
// });

// Route::get('testing2',function($value='')
// {
// 	return view('Testing2');
// })->name('testingpage');

Route::get('testing2', 'MainController@testing2')->name('testingpage');

Route::get('about', 'MainController@about')->name('aboutpage');

Route::get('contact', 'MainController@contact')->name('contactpage');

Route::resource('brand', 'BrandController'); //7 (get,post,put, delete)