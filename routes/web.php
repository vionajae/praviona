<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('bk', function () {
    return view('databuku');
});

Route::get('db', function () {
    return view('dashboard');
});
