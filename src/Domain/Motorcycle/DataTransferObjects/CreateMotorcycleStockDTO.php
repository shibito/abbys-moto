<?php

    namespace Domain\Motorcycle\DataTransferObjects;

    class CreateMotorcycleStockDTO
    {
        public function __construct(
            public string $motorcycle_id,
            public string $plate,
            public string $details,
        ) {}
    }
