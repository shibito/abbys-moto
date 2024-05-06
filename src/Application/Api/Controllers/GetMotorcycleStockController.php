<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Collections\MotorcycleStockCollection;
    use Application\Api\Requests\GetMotorcycleStockRequest;
    use Domain\Motorcycle\Actions\GetMotorcycleStockAction;

    class GetMotorcycleStockController extends Controller
    {
        public function __construct(
            private readonly GetMotorcycleStockAction $getMotorcycleStockAction
        ) {}

        public function __invoke(
            GetMotorcycleStockRequest $getMotorcycleStockRequest
        ): MotorcycleStockCollection
        {
            return ($this->getMotorcycleStockAction)($getMotorcycleStockRequest->validated()['rented'] ?? null);
        }
    }
