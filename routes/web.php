<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

// with Facade
// routes/web.php
Route::get('/', function () {
    return 'Hello, World!';
});


// without Facade
//$router->get('/', function () {
//    return 'Hello, World!';
//});




//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('about', function () {
//    return view('about');
//});
//Route::get('products', function () {
//    return view('products');
//});
//Route::get('services', function () {
//    return view('services');
//});
