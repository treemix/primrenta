<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::namespace('Admin')->group(function () {
    Route::get('/', 'HomeController@home')->name('admin.home');


    Route::prefix("categories")->group(function(){
        Route::get('/', 'CategoryController@index')->name('admin.categories.index');
        Route::get('/new', 'CategoryController@new')->name('admin.categories.new');


    });



});
