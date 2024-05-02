<?php

    namespace Domain\Motorcycle\Actions;

    use Domain\Motorcycle\DataTransferObjects\UpdateMotorcycleStockDTO;
    use Domain\Motorcycle\Models\MotorcycleStock;

    class UpdateMotorcycleStockAction
    {
        public function __invoke(
            UpdateMotorcycleStockDTO $updateMotorcycleStockDTO
        ): MotorcycleStock
        {
            $motorcycleStock = MotorcycleStock::where('id', $updateMotorcycleStockDTO->stock_id)->first();
            $motorcycleStock->plate = $updateMotorcycleStockDTO->plate;
            $motorcycleStock->details = $updateMotorcycleStockDTO->details;
            $motorcycleStock->save();

            return $motorcycleStock->refresh();
        }
    }
