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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('data/sample', 'SampleController');

Route::get('data/trashed', 'SampleController@trashed')->name('data.trashed');

Route::post('data/sample/update', 'SampleController@update')->name('sample.update');

Route::get('data/sample/destroy/{id}', 'SampleController@destroy');

Route::get('data/trashed/restore/{id}', 'SampleController@restore');

Route::get('data/trashed/forcedelete/{id}', 'SampleController@forceDelete');
