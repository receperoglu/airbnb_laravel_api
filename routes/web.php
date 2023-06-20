<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PlacesController;


 

Route::get('/', function () {
    return view('welcome');
});

Route::resource('accounts', AccountController::class);
Route::resource('places', PlacesController::class);



