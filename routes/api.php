<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['cors', 'json.response']], function () {


    Route::group(['middleware' => ['Api.Auth']],function(){
        Route::get('/user', 'MemberController@user')->name('api.user');
        Route::get('/company/user', 'MemberController@usercompany')->name('company.user');
        Route::get('/user/show/', 'MemberController@usershow')->name('show.user');
        Route::post('/user/create/', 'MemberController@create_user')->name('create.user');
        Route::post('/user/edit/', 'MemberController@edit_user')->name('edit.user');
        Route::post('/user/delete/', 'MemberController@delete_user')->name('delete.user');

        Route::get('/company/product', 'ProductController@companyproduct')->name('company.product');
        Route::get('/product/show', 'ProductController@productshow')->name('show.product');
        Route::post('/product/create', 'ProductController@create_product')->name('create.product');
        Route::post('/product/edit', 'ProductController@edit_product')->name('edit.product');
        Route::post('/product/delete', 'ProductController@delete_product')->name('delete.product');

        Route::get('/cart/show', 'TransactionController@show_cart')->name('show.cart');
        Route::post('/cart/add', 'TransactionController@add_cart')->name('add.cart');
    });
    // ...

    // public routes
    Route::post('/login', 'Auth\ApiAuthController@login')->name('login.api');
    Route::post('/register','Auth\ApiAuthController@register')->name('register.api');
    Route::post('/logout', 'Auth\ApiAuthController@logout')->name('logout.api');

    // ...

});
