<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::namespace('Admin')->group(function () {
    Route::get('/', 'HomeController@home')->name('admin.home');


    Route::prefix("categories")->namespace('Category')->group(function(){
        Route::get('/', 'CategoryController@index')->name('admin.categories.index');
        Route::get('/new', 'CategoryController@getNew')->name('admin.categories.get.new');
        Route::post('/new', 'CategoryController@postNew')->name('admin.categories.post.new');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('admin.categories.edit');
        Route::post('/update/{id}', 'CategoryController@update')->name('admin.categories.update');
        Route::get('/delete/{id}', 'CategoryController@delete')->name('admin.categories.delete');
        Route::get('/edit-page/{id}', 'CategoryController@editPage')->name('admin.categories.edit.page');
        Route::get('/update-page/{id}', 'CategoryController@updatePage')->name('admin.categories.update.page');


    });

    Route::prefix("users")->group(function(){
        Route::get('/', 'UserController@index')->name('admin.users.index');
        Route::get('/new', 'UserController@new')->name('admin.users.new');


    });

    Route::prefix("ajax")->namespace('Ajax')->group(function(){
        Route::prefix("categories")->namespace('Category')->group(function(){
            Route::prefix("datatable")->namespace('Datatable')->group(function(){
                Route::get('/init', 'DatatableController@init');

            });
            Route::get('/parent', 'CategoryController@getParent');



        });





    });


});
