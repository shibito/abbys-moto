<?php

    namespace Domain\Motorcycle\Actions;

    use Application\Api\Collections\MotorcycleStockCollection;
    use Domain\Motorcycle\Models\MotorcycleStock;

    class GetMotorcycleStockAction
    {
        public function __invoke(
            ?string $rented
        ): MotorcycleStockCollection
        {
            return new MotorcycleStockCollection(MotorcycleStock::query()
                ->with(['rented'])
                ->rented($rented)
                ->paginate()
            );
        }

    }
