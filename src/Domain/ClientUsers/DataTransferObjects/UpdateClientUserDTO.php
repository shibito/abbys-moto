<?php

    namespace Domain\ClientUsers\DataTransferObjects;

    class UpdateClientUserDTO
    {
        public function __construct(
            public string $firstname,
            public string $lastname,
            public string $client_user_id
        ) {}

    }
