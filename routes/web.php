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

Route::get('/', 'Visitors\PagesController@home')->name('visitors.home');


Route::prefix('admin')->group(function () {
   Route::get('/', 'Admin\AdminController@home')->name('admin.home');

   Route::get('groupes', 'Admin\GroupController@index')->name('groups.index');
   Route::get('groupes/create', 'Admin\GroupController@create')->name('groups.create');
   Route::post('groupes', 'Admin\GroupController@store')->name('groups.store');
   Route::get('groupes/{group}', 'Admin\GroupController@show')->name('groups.show');
   Route::get('groupes/{group}/edit', 'Admin\GroupController@edit')->name('groups.edit');
   Route::patch('groupes/{group}', 'Admin\GroupController@update')->name('groups.update');
   Route::delete('groupes/{group}/delete', 'Admin\GroupController@destroy')->name('groups.delete');
});
