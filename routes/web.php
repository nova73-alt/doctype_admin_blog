
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

Route::resource('/post', 'PostsController');

Route::resource('/category', 'CategoriesController');

Route::get('/check_slug', 'PostsController@check_slug')->name('check_slug');

Route::get('/check_slug_category', 'CategoriesController@check_slug')->name('check_slug_category');
