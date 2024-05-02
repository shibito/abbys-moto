<?php

    use Application\Api\Controllers\CreateClientUserController;
    use Application\Api\Controllers\DeleteClientUserController;
    use Application\Api\Controllers\GetClientUserController;
    use Application\Api\Controllers\GetMotorcycleController;
    use Application\Api\Controllers\LoginController;
    use Application\Api\Controllers\LogoutController;
    use Application\Api\Controllers\UpdateClientUserController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

Route::post('/login', LoginController::class);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/logout', LogoutController::class);

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/motorcycles', GetMotorcycleController::class);

    Route::prefix('client-users')->group(function () {
        Route::get('/', GetClientUserController::class);
        Route::post('/', CreateClientUserController::class);
        Route::put('/', UpdateClientUserController::class);
        Route::delete('/', DeleteClientUserController::class);
    });


});
