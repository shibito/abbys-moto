<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Requests\DeleteMotorcycleStockRequest;
    use Domain\Motorcycle\Actions\DeleteMotorcycleStockAction;

    class DeleteMotorcycleStockController extends Controller
    {
        public function __construct(
            public DeleteMotorcycleStockAction $deleteMotorcycleStockAction
        ) {}

        public function __invoke(
            DeleteMotorcycleStockRequest $motorcycleStockRequest
        )
        {
            $validated = $motorcycleStockRequest->validated();

            return ($this->deleteMotorcycleStockAction)($validated['stock_id']);
        }
    }
