<?php

    namespace Domain\ClientUsers\Actions;

    use Domain\ClientUsers\DataTransferObjects\UpdateClientUserDTO;
    use Domain\ClientUsers\Models\ClientUser;

    class UpdateClientUserAction
    {
        public function __invoke(
            UpdateClientUserDTO $updateClientUserDTO,
        ): ClientUser
        {
            $clientUser = ClientUser::where('id', $updateClientUserDTO->client_user_id)->first();
            $clientUser->firstname = $updateClientUserDTO->firstname;
            $clientUser->lastname = $updateClientUserDTO->lastname;
            $clientUser->save();

            return $clientUser->refresh();
        }

    }
