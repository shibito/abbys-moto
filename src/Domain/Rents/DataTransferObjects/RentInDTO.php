<?php

    namespace Domain\Rents\DataTransferObjects;

    use Carbon\Carbon;

    class RentInDTO
    {
        public function __construct(
            public string $client_user_id,
            public string $motorcycle_stock_id,
            public string $from_date,
            public string $to_date,
            public ?string $comment_in,
        ) {}
    }
