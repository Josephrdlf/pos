<?php

use Illuminate\Support\Facades\Route;
use App\Mail\InvoicesMail;

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

Route::group(['middleware' => ['Admin']],function(){
    Route::get('Admin/home', 'AuthController@routeadminhome')->name('route.admin.home');
    Route::get('Admin/employee', 'AuthController@routeadminuser')->name('route.admin.user');
    Route::get('Admin/company', 'AuthController@routeadmincompany')->name('route.admin.company');
});

Route::group(['middleware' => ['Owner']],function(){
    Route::get('owner/home', 'AuthController@routehome')->name('route.owner.home');
    Route::get('owner/employee', 'AuthController@routeemployee')->name('route.owner.employee');
    Route::get('owner/product', 'AuthController@routeproduct')->name('route.owner.product');
    Route::get('owner/cart', 'AuthController@routecart')->name('route.owner.cart');
    Route::get('owner/income', 'AuthController@routeincome')->name('route.owner.income');
    Route::get('owner/discount', 'AuthController@routediscount')->name('route.owner.discount');
    Route::get('owner/report', 'AuthController@routereport')->name('route.owner.report');
});

Route::group(['middleware' => ['Member']],function(){
    Route::get('member/home', 'AuthController@routememberhome')->name('route.member.home');
    Route::get('member/product', 'AuthController@routememberproduct')->name('route.member.product');
});

Route::group(['middleware' => ['Cashier']],function(){
    Route::get('cashier/home', 'AuthController@routecashierhome')->name('route.cashier.home');
    Route::get('cashier/cart', 'AuthController@routecashiercart')->name('route.cashier.cart');
});

Route::get('/login', 'AuthController@routelogin')->name('route.login');
Route::get('/register', 'AuthController@routeregister')->name('route.register');

Route::get('/home', function () {
    return view('home');
});

Route::get('/employee', function () {
    return view('employee');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/my-product', function () {
    return view('my-product');
});

Route::get('/discount', function () {
    return view('discount');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/income', function () {
    return view('income');
});

Route::get('/invoices', function () {
    return view('invoices');
});

Route::get('/email', function () {
    return new InvoicesMail();
});



