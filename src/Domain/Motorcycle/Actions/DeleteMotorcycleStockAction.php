<?php

    namespace Domain\Motorcycle\Actions;

    use Domain\Motorcycle\Models\MotorcycleStock;

    class DeleteMotorcycleStockAction
    {
        public function __invoke(
            string $motorcycleStockId,
        ): ?bool
        {
            return MotorcycleStock::where('id', $motorcycleStockId)->first()->delete();
        }

    }
