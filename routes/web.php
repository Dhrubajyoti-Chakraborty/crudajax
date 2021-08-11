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

Route::resource('ajax-posts', 'ajaxcrud\AjaxPostController');

Route::delete('delete-multiple-records', 'ajaxcrud\AjaxPostController@deleteMultipleRecords')->name('ajax-posts.multiple-delete');