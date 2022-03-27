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
    $tasks = ['task1', 'task2', 'task3'];

    return view('tasks', compact('tasks'));
});
Route::get('show/{id}', function ($id) {
    $tasks = ['task1', 'task2', 'task3'];
    $task = $tasks[$id];
    return view('show', compact('task'));
});
Route::get('show', function () {
    $tasks = ['task1', 'task2', 'task3'];


    return view('show');
});
Route::post('/about', function () {

    $name = $_POST['name'];
    return view('about', compact('name'));
});
Route::get('/about', function () {


    return view('about');
});
