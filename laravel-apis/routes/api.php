<?php

use App\Http\Controllers\numberController;
use App\Http\Controllers\numToBinaryController;
use App\Http\Controllers\operationController;
use App\Http\Controllers\sortController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => "v1"], function () {

    Route::get("/num/{number}", [numberController::class, 'getArray']);
    Route::post("/binary", [numToBinaryController::class, 'getResult']);
    Route::post("/operation", [operationController::class, 'getResult']);
    Route::post("/sort", [sortController::class, 'getResult']);
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
