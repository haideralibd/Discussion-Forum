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

Route::post('/comments/{postID}', 'CommentsController@store')->middleware('auth');


Route::get('/', 'HomeController@index');

Route::get('/createPost','PostsController@create')->middleware('auth');
Route::post('/submitPost', 'PostsController@store');
Route::get('/allPosts','PostsController@index')->middleware('auth');
Route::get('/editPost/{post}','PostsController@edit')->middleware('auth');
Route::post('/updatePost/{id}', 'PostsController@update')->middleware('auth');
Route::get('/posts/{post}', 'PostsController@show')->name('specificPost');
Route::post('/deletePost/{post}', 'PostsController@delete')->middleware('auth');




Route::get('/categories', 'CategoryController@index');
Route::post('/categories/add','CategoryController@store');

Auth::routes();

Route::get('/home', 'PostsController@index')->name('home');
