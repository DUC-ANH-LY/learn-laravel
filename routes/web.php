<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return 'Hello, World!';
});
Route::post('/', function () {
    // Handle someone sending a POST request to this route
});
Route::put('/', function () {
    // Handle someone sending a PUT request to this route
});
Route::delete('/', function () {
    // Handle someone sending a DELETE request to this route
});
Route::any('/', function () {
    // Handle any verb request to this route
});
Route::match(['get', 'post'], '/', function () {
    // Handle GET or POST requests to this route
});



