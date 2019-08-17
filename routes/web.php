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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::redirect('/', '/websites')->name('home');
    Route::get('edit-account', '\Maelstrom\Http\Controllers\EditAccountController')->name('maelstrom.edit-account');
    Route::put('edit-account', '\Maelstrom\Http\Controllers\EditAccountController@update');

    Route::resource('websites', 'WebsiteController');
    Route::get('websites/{website}/robots', 'RobotCompareController');
});