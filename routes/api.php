<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function () {
    Route::group(['prefix' => 'runner'], function () {
        Route::get('{runnerId}/form-data', [\App\Http\Controllers\RunnerController::class, 'getFormDataByRunnerId'])->name('runner-form-data');
    });

});


    Route::get('/', [\App\Http\Controllers\RunnerController::class, 'test']);


