<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes(['verify' => true]);


Route::namespace('Web')->group(function () {
    Route::get('/', 'HomeController@home')->name('home');


    Route::prefix("tasks")->group(function(){
        Route::get('/categories', 'TaskController@getCategories')->name('get.tasks.categories');
        Route::get('/new/{cat?}/{cat_child?}', 'TaskController@getNewTask')->name('get.tasks.new');



        Route::get('/all', 'TaskController@all')->name('tasks.all');
    });







    Route::get('/executors/all', 'ExecutorController@all')->name('executors.all');
    Route::get('/jobs/all', 'JobController@all')->name('jobs.all');


    Route::prefix("ajax")->namespace('Ajax')->group(function(){
        Route::prefix("categories")->namespace('Category')->group(function(){
            Route::get('/parent', 'CategoryController@getParent');
            Route::get('/child', 'CategoryController@getChild');

        });
        Route::prefix("media")->namespace('Media')->group(function(){
            Route::post('/upload', 'MediaController@postUpload');

        });


    });

});


