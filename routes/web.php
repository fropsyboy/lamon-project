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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/cart', 'HomeController@cart')->name('cart');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/menu', 'HomeController@menu')->name('menu');
Route::get('/single-blog', 'HomeController@singleBlog')->name('single-blog');

Route::get('/dashboard', 'AdminController@index')->name('dashboard');
Route::post('/addProduct', 'AdminController@addProduct')->name('addProduct');
Route::get('/chgStatus/{id}/{status}', 'AdminController@chgStatus')->name('chgStatus');
Route::get('/viewProduct/{id}', 'AdminController@viewProduct')->name('viewProduct');


