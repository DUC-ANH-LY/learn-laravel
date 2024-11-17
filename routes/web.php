<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('home');
//});
//Route::get('tasks', function () {
//    return view('tasks.index')
//        ->with('tasks', Task::all());
//});

// Returns resources/views/welcome.blade.php
Route::view('/', 'welcome');
// Passing simple data to Route::view()
Route::view('/', 'welcome', ['User' => 'Michael']);
//

