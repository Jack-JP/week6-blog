<?php

/*
|--------------------------------------------------------------------------
| Public post Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function(){
 return view('post.index');
});


Auth::routes();

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin', function(){
 return view('admin.index');
});

/*
|--------------------------------------------------------------------------
| Category Routes
|--------------------------------------------------------------------------
*/
Route::resource('/admin/category', 'CategoryController');
