<?php

use App\Http\Controllers\numberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => "v1"], function () {

    Route::get("/num/{number}", [numberController::class, 'getArray']);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
