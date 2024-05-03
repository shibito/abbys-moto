<?php

    namespace Application\Api\Policies;

    use Domain\Rents\Models\Rent;
    use Domain\Users\Models\User;
    use Illuminate\Auth\Access\HandlesAuthorization;

    class RentPolicy
    {
        use HandlesAuthorization;

        public function viewAny(User $user): bool
        {

        }

        public function view(User $user, Rent $rent): bool
        {
        }

        public function create(User $user): bool
        {
        }

        public function update(User $user, Rent $rent): bool
        {
        }

        public function delete(User $user, Rent $rent): bool
        {
        }

        public function restore(User $user, Rent $rent): bool
        {
        }

        public function forceDelete(User $user, Rent $rent): bool
        {
        }
    }
