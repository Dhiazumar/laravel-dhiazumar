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
    return view('welcome');
});

// Closure
Route::get('/profile', function(){
    return "ini adalah profile saya";
})->name('profile');

// Route name
Route::get('test', function(){
    return route('profile');
});

// Parameter
Route::get('/profile/{id}', function($id){
    return $id;
});

// Controller
Route::get('/testcontroller', 'TestController@show');

// Resource
Route::resource('profiles', 'ProfileController');