<?php

    namespace Application\Api\Controllers;

    use App\Http\Controllers\Controller;
    use Application\Api\Collections\MotorcycleStockCollection;
    use Domain\Motorcycle\Actions\GetMotorcycleStockAction;

    class GetMotorcycleStockController extends Controller
    {
        public function __construct(
            public GetMotorcycleStockAction $getMotorcycleStockAction
        ) {}

        public function __invoke(): MotorcycleStockCollection
        {
            return ($this->getMotorcycleStockAction)();
        }
    }
