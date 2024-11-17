<?php

use Illuminate\Support\Facades\Route;



Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        // Handles the path /dashboard
        return 'dashboard';
    });
    Route::get('users', function () {
        return 'user';
    });
});

Route::fallback(function () {
    return 'Not match anything';
});


Route::domain('api.myapp.com')->group(function () {
    Route::get('/', function () {
    });
});


Route::domain('{account}.myapp.com')->group(function () {
    Route::get('/', function ($account) {
        //
    });
    Route::get('users/{id}', function ($account, $id) {
        //
    });
});

