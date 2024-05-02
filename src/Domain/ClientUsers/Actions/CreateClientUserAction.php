<?php

    namespace Domain\ClientUsers\Actions;

    use Domain\ClientUsers\DataTransferObjects\CreateClientUserDTO;
    use Domain\ClientUsers\Models\ClientUser;

    class CreateClientUserAction
    {
        public function __invoke(
            CreateClientUserDTO $createClientUserData
        ): ClientUser
        {
            $clientUser = new ClientUser((array)$createClientUserData);

            $clientUser->save();

            return $clientUser;
        }

    }
