<?php

use App\Http\Controllers\ExceptionController;
use App\Http\Controllers\ResponseCheckController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('api')->group(function () {
    Route::group(['prefix' => 'res_check'], function () {
        Route::get('/stdclass', [ResponseCheckController::class, 'returnStdClass']);
        Route::get('/array', [ResponseCheckController::class, 'returnArray']);
    });
});

Route::middleware('api')->group(function () {
    Route::get('/exception/check/{id}', [ExceptionController::class, 'index']);
});
