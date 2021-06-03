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
//this return welcome blade file inside view folder

// Route::get('/', function () {
//     return view('pages.home', ['company' => 'Awesomesolutions'],['tagline'=>'Your Happiness Our Assets']);
// });

Route::get('/', 'PageController@home');
Route::get('/aboutus', 'PageController@about');
Route::get('contact', 'PageController@contact');
Route::get('teams','PageController@teams');