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

    Route::get('/tasks/new', 'TaskController@new')->name('tasks-new');
    Route::get('/tasks/all', 'TaskController@all')->name('tasks-all');
    Route::get('/executors/all', 'ExecutorController@all')->name('executors-all');
    Route::get('/jobs/all', 'JobController@all')->name('jobs-all');

});


