<?php

use App\Http\Controllers\ApiSensorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);
 
    return ['token' => $token->plainTextToken];
});

// Route::apiResource('sensor', ApiSensorController::class);
Route::prefix('sensor')->group(function () {
    Route::get('pumpStatus/{sensorId}', [ApiSensorController::class, 'pumpStatus']);
    Route::post('postData', [ApiSensorController::class, 'postData']);
});