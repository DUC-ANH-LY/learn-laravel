<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('home');
});


Route::get('/test', function () {
    return view('greeting.test');
});
