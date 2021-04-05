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

// Route::get('/', function () {
//     return view('frontend.home');
// });


Route::group(['prefix' => 'login', 'middleware' => 'CheckLogedIn'], function () {
    Route::get('/', 'AdminController@getLogin');
    Route::post('/', 'AdminController@postLogin');



});
Route::get('/register', 'AdminController@getRegister');
Route::post('/register', 'AdminController@postRegister');

Route::get('/logout', 'AdminController@getLogout');

Route::get('/search', 'ProductController@search');



Route::resource('user', 'UserController');

Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::resource('categories', 'CategoryController');
Route::resource('products', 'ProductController');
Route::get('/', 'HomeController@index')->name('home');
Route::get('categories/{id}','CategoryController@show');
Route::get('product/{id}','ProductController@showhang');
Route::get('products/{action}/{id}', 'ProductController@action')->name('backend.products.index');
Route::get('categories/{action}/{id}', 'CategoryController@action')->name('backend.categories.index');
Route::get('user/{action}/{id}', 'UserController@action')->name('backend.user.index');







Route::group(['middleware' => 'CheckLogedOut'], function () {
    Route::get('/admin', function () {
        return view('backend.home');
    });
});
