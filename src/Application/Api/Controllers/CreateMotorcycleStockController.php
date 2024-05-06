<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Requests\CreateMotorcycleStockRequest;
    use Application\Api\Resource\MotorcycleStockResource;
    use Domain\Motorcycle\Actions\CreateMotorcycleStockAction;
    use Domain\Motorcycle\DataTransferObjects\CreateMotorcycleStockDTO;
    use Domain\Motorcycle\Models\MotorcycleStock;

    class CreateMotorcycleStockController extends Controller
    {
        public function __construct(
            private readonly CreateMotorcycleStockAction $createMotorcycleStockAction
        ) {}

        public function __invoke(
            CreateMotorcycleStockRequest $motorcycleStockRequest
        ): array
        {
            $validated = $motorcycleStockRequest->validated();

            return ['data' => new MotorcycleStockResource(($this->createMotorcycleStockAction)(new CreateMotorcycleStockDTO(...$validated)))];
        }
    }
