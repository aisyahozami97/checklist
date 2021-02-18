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

Route::get('/test', function(){ 
    return view('test',['name'=>'ICT600 Lab 8 Laravel']); 
    });

//Route::get('insert','StaffInsertController@insertform'); *Could not find controller
Route::get('/insert', 'App\Http\Controllers\StaffInsertController@insertform');
Route::post('/create','App\Http\Controllers\StaffInsertController@insert'); 
//Route::get('/create', 'App\Http\Controllers\StaffInsertController@insert')->name('create');

//Add Task
Route::get('/insertTask', 'App\Http\Controllers\TaskListInsertController@insertTask');
Route::post('/createTask','App\Http\Controllers\TaskListInsertController@insertTaskDetail'); 

//Retrive Task
Route::get('/view-records','App\Http\Controllers\TaskViewController@index');

//Update Task
Route::get('edit-records','App\Http\Controllers\taskUpdateController@index');
Route::get('edit/{taskId}','App\Http\Controllers\taskUpdateController@show');
Route::post('edit/{taskId}','App\Http\Controllers\taskUpdateController@edit');

//Delete Task
Route::get('delete-records','App\Http\Controllers\TaskDeleteController@index');
Route::get('delete/{taskId}','App\Http\Controllers\TaskDeleteController@destroy');

//Register
Route::get('/register', 'App\Http\Controllers\Auth\AuthController@register')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\AuthController@storeUser');

//Login
Route::get('/login', 'App\Http\Controllers\Auth\AuthController@login')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\AuthController@authenticate');
Route::get('logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('logout');

//Homepage
Route::get('/home', 'App\Http\Controllers\Auth\AuthController@home')->name('home');
?>