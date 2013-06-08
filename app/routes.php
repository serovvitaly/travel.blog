<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
 
Route::group(array('prefix' => 'ajax'), function()
{

    Route::controller('blog', 'BlogPostController');

});


Route::controller('post/{id}', 'BlogPostController');

Route::controller('profile', 'ProfileController');
 
Route::controller('/', 'BlogListController');

