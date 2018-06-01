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

// root route
Route::get('/', function () {
    return view('welcome');
})->name('root');

// view route
Route::view('/profile', 'profile')->name('profile');

// use optional parameters in the route result
Route::get('/profile/{name?}', function($name = null){
  return $name . " profile file";
});

// number route
Route::get('/number', function(){
  return "please enter your number between 1 to 4";
});

// regular expression constraints for numb route
Route::get('/number/{numb}', function($numb){
  return "your number is " . $numb;
})->where('numb', '[1-4]+');

// dashboard Route
Route::get('/dashboard', function(){
  return view('dashboard');
});

// redirect redash url to dashboard url
Route::redirect('/redash', 'dashboard', 301);


Route::get('/home', 'UsersController@home');
