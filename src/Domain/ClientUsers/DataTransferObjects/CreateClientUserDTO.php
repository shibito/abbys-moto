<?php

    namespace Domain\ClientUsers\DataTransferObjects;

    class CreateClientUserDTO
    {
        public function __construct(
            public string $firstname,
            public string $lastname,
            public string $user_id
        ) {}

    }
