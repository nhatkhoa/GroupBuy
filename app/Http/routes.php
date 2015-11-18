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

use App\Repository\CategoryRepositories;
Route::group(['namespace' => 'FrontEnd'], function(){
   Route::resource('/', 'MainController');
});

Route::group(['prefix'=>'admin', 'namespace' => 'Admin'], function(){
    Route::resource('categories','CategoryController');
    Route::resource('deals','DealController');
    Route::resource('partners','PartnerController');
});
