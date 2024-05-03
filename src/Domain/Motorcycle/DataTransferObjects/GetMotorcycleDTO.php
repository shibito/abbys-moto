<?php

    namespace Domain\Motorcycle\DataTransferObjects;

    class GetMotorcycleDTO
    {
        public function __construct(
            public ?string $search = null,
            public ?bool $stock = null,
        ) {}
    }
