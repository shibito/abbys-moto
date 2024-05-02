<?php

    namespace Domain\Motorcycle\DataTransferObjects;

    class UpdateMotorcycleStockDTO
    {
        public function __construct(
            public string $stock_id,
            public string $plate,
            public string $details,
        ) {}
    }
