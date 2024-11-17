<?php

use Illuminate\Support\Facades\Route;


Route::group([],function () {
    Route::get('hello', function () {
        return 'Hello';
    });
    Route::get('world', function () {
        return 'World';
    });
});
// learn more about middleware in Chapter 10
Route::middleware('auth')->group(function() {
    Route::get('dashboard', function () {
        return view('dashboard');
    });
    Route::get('account', function () {
        return view('account');
    });
});

// rate limit ( hạn chế (limit) số lượng request gửi/nhận (rate))
// first: number of request allowed ,
// second: number of minutes to wait before resetting the attempt count
Route::middleware('auth:api', 'throttle:60,1')->group(function () {
    Route::get('/profile', function () {
        //
    });
});
