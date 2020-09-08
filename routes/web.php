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

Route::get('/', 'TasksController@index')->name('tasks.home');

Route::get('tareas/registro', 'TasksController@create')->name('tasks.newTask');
Route::post('tareas', 'TasksController@store')->name('tasks.create');

Route::patch('tareas/{id}', 'TasksController@update')->name('tasks.update');

Route::delete('/tareas/{id}', 'TasksController@destroy')->name('tasks.destroy');

Route::get('tareas/{id}/edit', 'TasksController@edit')->name('tasks.edit');

//Route::get('tareas/{id}', 'TasksController@show')->name('tasks.show');
