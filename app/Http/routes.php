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
use App\Model\Deal;
use App\Model\Partner;

Route::group(['prefix' => 'api', 'namespace' => 'Api', 'middleware' => 'cors'], function(){
    Route::get('/categories', function(){
        $categories = Category::where('parent_id', null)->get();
       return $categories;
    });

    Route::get('/categories/{id}', function($id){
        return Deal::where('partner_id', $id)->get();
    });
});

Route::group(['namespace' => 'Frontend'], function(){
    Route::get('/', 'MainController@index');
    Route::get('/danh-muc/{category_id}', 'MainController@listProductByCategory');
    Route::get('/san-pham/{deal_id}', 'MainController@productByCategory');
    Route::post('/cart', 'MainController@postCard');

    Route::post('/search', 'MainController@search');

});

Route::group(['prefix'=>'admin', 'namespace' => 'Admin'], function(){
    Route::resource('categories','CategoryController');
    Route::post('/categories/{id}', 'CategoryController@destroy');
    Route::resource('deals','DealController');
    Route::post('/deals/{id}','DealController@destroy');
    Route::resource('partners','PartnerController');

    Route::get('/deals/{deal_id}/images', 'ImageController@index');
});

Route::post('auth/login', 'Auth\AuthController@loginAjax');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::post('auth/register', 'Auth\AuthController@postRegister');
