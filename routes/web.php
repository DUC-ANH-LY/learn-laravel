<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\TasksController@index');

Route::get('passing-data-to-views', function () {
    return view('dashboard')
        ->with('key', 'value');
});

