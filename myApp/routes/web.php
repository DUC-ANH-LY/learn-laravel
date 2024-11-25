<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TasksController@index');
Route::get('/testScope', 'App\Http\Controllers\TasksController@testScope');
Route::get('/testAttr', 'App\Http\Controllers\TasksController@testAttr');

Route::get('passing-data-to-views', function () {
    return view('dashboard')
        ->with('key', 'value');
});


