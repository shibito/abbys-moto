<?php

    use Application\Api\Controllers\CreateClientUserController;
    use Application\Api\Controllers\CreateMotorcycleStockController;
    use Application\Api\Controllers\DeleteClientUserController;
    use Application\Api\Controllers\DeleteMotorcycleStockController;
    use Application\Api\Controllers\GetClientUserController;
    use Application\Api\Controllers\GetMotorcycleController;
    use Application\Api\Controllers\GetMotorcycleStockController;
    use Application\Api\Controllers\GetRentController;
    use Application\Api\Controllers\LoginController;
    use Application\Api\Controllers\LogoutController;
    use Application\Api\Controllers\RentInController;
    use Application\Api\Controllers\RentOutController;
    use Application\Api\Controllers\UpdateClientUserController;
    use Application\Api\Controllers\UpdateMotorcycleStockController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    Route::post('/login', LoginController::class);

    Route::middleware('auth:sanctum')->group(function () {

        Route::get('/logout', LogoutController::class);

        Route::get('/user', function (Request $request) {
            return ['data' => $request->user()];
        });

        Route::prefix('client-users')->group(function () {
            Route::get('/', GetClientUserController::class);
            Route::post('/', CreateClientUserController::class);
            Route::patch('/', UpdateClientUserController::class);
            Route::delete('/', DeleteClientUserController::class);
        });

        Route::prefix('motorcycles')->group(function () {
            Route::get('/', GetMotorcycleController::class);

            Route::prefix('stocks')->group(function () {
                Route::get('/', GetMotorcycleStockController::class);
                Route::post('/', CreateMotorcycleStockController::class);
                Route::patch('/', UpdateMotorcycleStockController::class);
                Route::delete('/', DeleteMotorcycleStockController::class);
            });
        });

        Route::prefix('rent')->group(function () {
            Route::get('/',GetRentController::class);
            Route::post('/in', RentInController::class);
            Route::post('/out', RentOutController::class);
        });

    });
