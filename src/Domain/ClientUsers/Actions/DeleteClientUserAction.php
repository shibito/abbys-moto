<?php

    namespace Domain\ClientUsers\Actions;

    use Domain\ClientUsers\Models\ClientUser;

    class DeleteClientUserAction
    {
        public function __invoke(
            string $clientUserId,
        ): array
        {
            ClientUser::where('id', $clientUserId)->first()->deleteOrFail();

            return [
                'message' => 'Client User Deleted',
            ];
        }

    }
