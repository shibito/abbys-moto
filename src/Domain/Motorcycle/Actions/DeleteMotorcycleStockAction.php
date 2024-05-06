<?php

    namespace Domain\Motorcycle\Actions;

    use Domain\Motorcycle\Models\MotorcycleStock;

    class DeleteMotorcycleStockAction
    {
        public function __invoke(
            string $motorcycleStockId,
        ): array
        {
            MotorcycleStock::where('id', $motorcycleStockId)->first()->delete();

            return [
                'message' => 'Motorcycle Stock Deleted',
            ];
        }

    }
