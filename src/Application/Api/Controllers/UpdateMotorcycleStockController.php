<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Requests\UpdateMotorcycleStockRequest;
    use Application\Api\Resource\MotorcycleStockResource;
    use Domain\Motorcycle\Actions\UpdateMotorcycleStockAction;
    use Domain\Motorcycle\DataTransferObjects\UpdateMotorcycleStockDTO;

    class UpdateMotorcycleStockController extends Controller
    {
        public function __construct(
            private readonly UpdateMotorcycleStockAction $updateMotorcycleStockAction
        ) {}

        public function __invoke(
            UpdateMotorcycleStockRequest $updateMotorcycleStockRequest
        ): array
        {
            $validated = $updateMotorcycleStockRequest->validated();

            return ['data' => new MotorcycleStockResource(($this->updateMotorcycleStockAction)(new UpdateMotorcycleStockDTO(...$validated)))];
        }
    }
