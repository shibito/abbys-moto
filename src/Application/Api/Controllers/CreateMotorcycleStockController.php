<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Requests\CreateMotorcycleStockRequest;
    use Domain\Motorcycle\Actions\CreateMotorcycleStockAction;
    use Domain\Motorcycle\DataTransferObjects\CreateMotorcycleStockDTO;
    use Domain\Motorcycle\Models\MotorcycleStock;

    class CreateMotorcycleStockController extends Controller
    {
        public function __construct(
            public CreateMotorcycleStockAction $createMotorcycleStockAction
        ) {}

        public function __invoke(CreateMotorcycleStockRequest $motorcycleStockRequest): MotorcycleStock
        {
            $request = $motorcycleStockRequest->validated();

            return ($this->createMotorcycleStockAction)(new CreateMotorcycleStockDTO(...$request));
        }
    }
