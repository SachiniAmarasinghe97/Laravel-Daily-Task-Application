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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tasks', function () {
    $data=App\Models\Task::all();

    return view('tasks')->with ('tasks',$data);
});
Route::post('/saveTask', 'App\HTTP\Controllers\TaskController@store');

Route::get('/markascompleted/{id}','App\HTTP\Controllers\TaskController@UpdateTaskAsCompleted');
Route::get('/markasnotcompleted/{id}','App\HTTP\Controllers\TaskController@UpdateTaskAsNotCompleted');
Route::get('/deletetask/{id}','App\HTTP\Controllers\TaskController@deletetask');
Route::get('/updatetask/{id}','App\HTTP\Controllers\TaskController@updatetaskview');
Route::post('/updatetasks','App\HTTP\Controllers\TaskController@updatetask');
