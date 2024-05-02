<?php

    namespace Domain\ClientUsers\Actions;

    use Domain\ClientUsers\Models\ClientUser;

    class DeleteClientUserAction
    {
        public function __invoke(
            string $clientUserId,
        ): ?bool
        {
            return ClientUser::where('id', $clientUserId)->first()->delete();
        }

    }
