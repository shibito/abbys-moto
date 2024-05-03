<?php

    namespace Domain\Rents\DataTransferObjects;

    class RentOutDTO
    {
        public function __construct(
            public string $rent_id,
            public string $return_date,
            public string $comment_out,
            public bool $returned,
        ) {}
    }
