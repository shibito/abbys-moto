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
            public UpdateMotorcycleStockAction $updateMotorcycleStockAction
        ) {}

        public function __invoke(
            UpdateMotorcycleStockRequest $updateMotorcycleStockRequest
        ): MotorcycleStockResource
        {
            $request = $updateMotorcycleStockRequest->validated();

            return new MotorcycleStockResource(($this->updateMotorcycleStockAction)(new UpdateMotorcycleStockDTO(...$request)));
        }
    }
