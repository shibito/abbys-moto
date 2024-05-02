<?php

    namespace Application\Api\Policies;

    use Domain\ClientUsers\Models\ClientUser;
    use Domain\Users\Models\User;
    use Illuminate\Auth\Access\HandlesAuthorization;

    class ClientUserPolicy
    {
        use HandlesAuthorization;

        public function viewAny(User $user): bool
        {

        }

        public function view(User $user, ClientUser $clientUser): bool
        {
        }

        public function create(User $user): bool
        {
        }

        public function update(User $user, ClientUser $clientUser): bool
        {
        }

        public function delete(User $user, ClientUser $clientUser): bool
        {
        }

        public function restore(User $user, ClientUser $clientUser): bool
        {
        }

        public function forceDelete(User $user, ClientUser $clientUser): bool
        {
        }
    }
