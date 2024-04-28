<?php

    use Application\Api\Controllers\GetMotorcycleController;
    use Application\Api\Controllers\LoginController;
use Application\Api\Controllers\LogoutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', LoginController::class);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/logout', LogoutController::class);

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/motorcycles', GetMotorcycleController::class);

});
