<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Post;
use Illuminate\Http\Request;
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

Route::post('/comments/{postID}', 'CommentsController@store');


Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/createPost','PostsController@create')->middleware('auth');
Route::post('/submitPost', 'PostsController@store');


Route::get('/categories', 'CategoryController@index');
Route::post('/categories/add','CategoryController@store');

Auth::routes();

Route::get('/home', 'PostsController@index')->name('home');
