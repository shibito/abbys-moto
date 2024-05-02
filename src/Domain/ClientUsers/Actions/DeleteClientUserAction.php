<?php

    namespace Domain\ClientUsers\Actions;

    use Domain\ClientUsers\Models\ClientUser;

    class DeleteClientUserAction
    {
        public function __invoke(
            string $clientUserId,
        )
        {
            $clientUser = ClientUser::where('id', $clientUserId)->first();

            return $clientUser->delete();
        }

    }
