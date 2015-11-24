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

use App\Model\Category;

Route::group(['namespace' => 'FrontEnd'], function(){

    Route::resource('/', 'MainController');
    Route::get('/danh-muc/{id}', 'ProductController@deals');

});

Route::group(['prefix' => 'api', 'namespace' => 'Api'], function(){
    Route::get('/categories', function(){
        $categories = Category::where('parent_id', null)->get();
       return $categories;
    });
});

Route::group(['prefix'=>'admin', 'namespace' => 'Admin'], function(){
    Route::resource('categories','CategoryController');
    Route::resource('deals','DealController');
    Route::resource('partners','PartnerController');
});
