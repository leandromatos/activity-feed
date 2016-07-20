<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/{user}/activity', 'ActivitiesController@show');

// // Just a quickie example.
// Route::get('users/{user}/favorite', function (App\User $user) {
//     Eloquent::unguard(); // just for demo.
//     $post = App\Post::first();
//     $user->recordActivity('favorited', $post);
// });
