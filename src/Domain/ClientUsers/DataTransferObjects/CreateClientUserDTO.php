<?php

    namespace Domain\ClientUsers\DataTransferObjects;

    use Domain\Users\Models\User;

    class CreateClientUserDTO
    {
        public function __construct(
            public string $firstname,
            public string $lastname,
            public string $user_id
        ) {}

    }
