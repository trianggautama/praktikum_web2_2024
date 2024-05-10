<?php

use Illuminate\Support\Facades\Route;

//halaman depan 
Route::get('/', function () {
    return view('welcome');
});

//halaman home
Route::get('/home', function () {
    return view('home');
});