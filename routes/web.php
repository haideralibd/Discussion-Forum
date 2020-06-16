<?php

use App\Http\Controllers\HomeController;
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

Route::view('/createArticles','createArticles');




Route::get('/test', function(Request $request){
    return view('test', ['name' => $request->testdata ]);
});

Auth::routes();

Route::get('/home', 'PostsController@index')->name('home');
