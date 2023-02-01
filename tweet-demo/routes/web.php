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

Route::get('/', function () {
    // go get information from a database

    return view('welcome');
});

//get all tweets
Route::get('/tweets', function(){

});

//show the form to create a tweet
Route::get('tweets', function(){

});

//create a tweet - handle the form for creating a tweet
Route::post('tweets', function($request){
    dd($request->input()->all())
});
 
// update a tweet
Route::put('tweets/{tweetId}', function($tweetId){

});

//delete a tweet
Route::delete('/tweet/{tweetId}', function($tweetId){

});

