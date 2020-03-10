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

   Route::get('enseignants', 'Admin\TeacherController@index')->name('teachers.index');
   Route::get('enseignants/create', 'Admin\TeacherController@create')->name('teachers.create');
   Route::post('enseignants', 'Admin\TeacherController@store')->name('teachers.store');
   Route::get('enseignants/{teacher}', 'Admin\TeacherController@show')->name('teachers.show');
   Route::get('enseignants/{teacher}/edit', 'Admin\TeacherController@edit')->name('teachers.edit');
   Route::patch('enseignants/{teacher}', 'Admin\TeacherController@update')->name('teachers.update');
   Route::delete('enseignants/{teacher}/delete', 'Admin\TeacherController@destroy')->name('teachers.delete');
});



/* visitor's routes */

Route::get('groupes', 'Visitors\PagesController@groups')->name('visitors.groups');

Route::get('enseignants', 'Visitors\PagesController@teachers')->name('visitors.teachers');
