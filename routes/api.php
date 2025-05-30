<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


  Route::controller(AuthController::class)->prefix("auth")->middleware('api')->group(function (){
  Route::post('login','login')->name('auth.login');
  Route::post('register','register')->name('auth.register');
 
  Route::middleware('jwt.auth.token')->group(function () {
    Route::post("logout", "logut")->name("auth.logut");
    Route::get('user-profile','userProfile')->name('auth.user.profile');
   });
  


  });
  
 