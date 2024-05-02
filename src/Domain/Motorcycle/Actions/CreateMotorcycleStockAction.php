<?php

    namespace Domain\Motorcycle\Actions;

    use Domain\Motorcycle\DataTransferObjects\CreateMotorcycleStockDTO;
    use Domain\Motorcycle\Models\MotorcycleStock;

    class CreateMotorcycleStockAction
    {
        public function __invoke(
            CreateMotorcycleStockDTO $motorcycleStockDTO
        ): MotorcycleStock
        {
            $motorcycleStock = new MotorcycleStock((array)$motorcycleStockDTO);

            $motorcycleStock->save();

            return $motorcycleStock;
        }

    }
