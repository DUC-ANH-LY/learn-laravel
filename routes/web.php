<?php

use Illuminate\Support\Facades\Route;


Route::get('users/{id}/friends', function ($id) {
    dd($id);
});


Route::get('users/{id?}', function ($id = 'fallbackId') {
    dd($id);
});

Route::get('users/{id}', function ($id) {
    //
})->where('id', '[0-9]+');
Route::get('users/{username}', function ($username) {
    //
})->where('username', '[A-Za-z]+');
Route::get('posts/{id}/{slug}', function ($id, $slug) {
    //
})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z]+']);

