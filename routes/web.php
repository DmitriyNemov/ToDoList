<?php

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

Route::get('/', action:'ToDoListController@index')->name('todo.index');

Route::get('/create', action:'ToDoListController@create')->name('todo.create');

Route::post('/', action:'ToDoListController@store')->name('todo.store');

Route::get('/{todo}', action:'ToDoListController@show')->name('todo.show');

Route::get('/{todo}/edit', action:'ToDoListController@edit')->name('todo.edit');

Route::patch('/{todo}', action:'ToDoListController@update')->name('todo.update');

Route::delete('/{todo}', action:'ToDoListController@destroy')->name('todo.destroy');
