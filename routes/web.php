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


Route::middleware(['auth'])->group(function () {


    Route::get('/admin', function () {
        return view('admin/index');
    });
    
    // Категории
    Route::resource('/admin/categories', 'CategoryController'); 
    Route::get('/admin/categories', 'CategoryController@adminCategoryList')->name('home');

});

//Route::get('login', 'Auth\LoginController@showLoginForm');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home'); 