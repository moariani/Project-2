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

Use Illuminate\Support\Facades\Route  ;
Use Illuminate\Support\Facades\Auth ;



/* AdminPanel Routes
-------------------*/
Route::prefix('admin')->group(function() {
    // ShowAdmin Route
    Route::get('/' , 'showAdmin')->name('showadmin') ;
    // PostController Routes
    Route::prefix('post')->group(function () {
        Route::get('/' , 'PostController@index')->name('post.index') ;
        Route::get('/create' , 'PostController@create')->name('post.create') ;
        Route::post('/store' , 'PostController@store')->name('post.store') ;
        Route::get('/edit/{post}' , 'PostController@edit')->name('post.edit') ;
        Route::put('/update/{post}' , 'PostController@update')->name('post.update') ;
        Route::delete('/destroy/{post}' , 'PostController@destroy')->name('post.destroy') ;
    }) ;
    // UserController Routes
    Route::prefix('user')->group(function () {
        Route::get('/' , 'UserController@index')->name('user.index') ;
        Route::delete('/destroy/{user}' , 'UserController@destroy')->name('user.destroy') ;
    });
    // CommentController Routes
    Route::prefix('comment')->group(function () {
        Route::get('/' , 'CommentController@index')->name('comment.index') ;
        Route::delete('/destroy/{comment}' , 'CommentController@destroy')->name('comment.destroy') ;
    });
}) ;

/* News Routes
-------------------*/
Route::get('/' , 'NewsController@index')->name('news.index') ;
Route::post('/store' , 'NewsController@store')->name('news.store') ;
Route::get('/show/{post}' , 'NewsController@show')->name('news.show') ;

/* Auth Routes
-------------------*/
Auth::routes();
Route::get('/logout' , 'Auth\LoginController@logout') ;




