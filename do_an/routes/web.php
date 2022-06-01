<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'/'],function(){
    Route::get('/',[CustomerController::class,'index'])->name('index');
});
Route::group(['prefix'=>'/admin'],function(){
    Route::get('/',[AdminController::class,'index'])->name('index');
});