<?php

    namespace Domain\Motorcycle\Actions;

    use Application\Api\Collections\MotorcycleStockCollection;
    use Domain\Motorcycle\Models\MotorcycleStock;

    class GetMotorcycleStockAction
    {
        public function __invoke(): MotorcycleStockCollection
        {
            return new MotorcycleStockCollection(MotorcycleStock::query()->paginate());
        }

    }
