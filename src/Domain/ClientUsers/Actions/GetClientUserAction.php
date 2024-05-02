<?php

    namespace Domain\ClientUsers\Actions;

    use Application\Api\Collections\ClientUserCollection;
    use Domain\ClientUsers\Models\ClientUser;

    class GetClientUserAction
    {
        public function __invoke(): ClientUserCollection
        {
            return new ClientUserCollection(ClientUser::query()->paginate());
        }
    }
