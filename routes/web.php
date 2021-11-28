<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('\portfolio\view');
});


Route::resource('/', 'App\Http\Controllers\portfolio\PortfolioController');