<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home'); 
});
Route::get('/detail', function () {
    return view('pages.detailpages'); 
});
