<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test-api-endpoint', function (Request $request) {
    return - response()->json([
        'message'=> 'Hello welcome to REST API Architecture world',
        'Parameters' => $request->all(),
        'Moral' => $request->query('Moral')

    ], 200);
        
    

    })->middleware('auth:sanctum');
