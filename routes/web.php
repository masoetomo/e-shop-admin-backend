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

Route::get('/', 'DashboardController@index')->name('dashboard');;

Route::get('halo', function () {
    return 'Haloo walkure';
});
Auth::routes(['register' => false]);

Route::get('product-galleries/{id}/gallery', 'ProductGalleryController@gallery')
->name('products.gallery');
Route::resource('products', 'ProductController');
Route::resource('product-galleries', 'ProductGalleryController');
Route::resource('transactions', 'TransactionController');
// Route::get('/home', 'HomeController@index')->name('home');
