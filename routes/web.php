<?php

/*
|--------------------------------------------------------------------------
| Public post Routes
|--------------------------------------------------------------------------
*/
Route::get('/', 'PostController@index');
Route::resource('/post', 'PostController');

Auth::routes();

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin', function(){
 return view('admin.index');
})->middleware('auth');


/*
|--------------------------------------------------------------------------
| Category Routes
|--------------------------------------------------------------------------
*/
Route::resource('/admin/category', 'CategoryController')->middleware('auth');

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::resource('/admin/user', 'UserController')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Comment Routes
|--------------------------------------------------------------------------
*/
Route::resource('/comment', 'CommentController');
