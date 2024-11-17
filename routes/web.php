<?php

use Illuminate\Support\Facades\Route;

// App\Http\Controllers\UsersController
Route::get('/', 'UsersController@index');
Route::namespace('Dashboard')->group(function () {
    // App\Http\Controllers\Dashboard\PurchasesController
    Route::get('dashboard/purchases', 'PurchasesController@index');
});

Route::name('users.')->prefix('users')->group(function () {
    Route::name('comments.')->prefix('comments')->group(function () {
        Route::get('{id}', function () {
        })->name('show');
    });
});
