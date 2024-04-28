<?php

namespace Domain\Users\DataTransferObjects;

class LoginDataTransferObject
{
    public function __construct(
        public string $email,
        public string $password,
    ) {}
}
