<?php

    namespace Application\Api\Policies;

    use Domain\Motorcycle\Models\MotorcycleStock;
    use Domain\Users\Models\User;
    use Illuminate\Auth\Access\HandlesAuthorization;

    class MotorcycleStockPolicy
    {
        use HandlesAuthorization;

        public function viewAny(User $user): bool
        {

        }

        public function view(User $user, MotorcycleStock $motorcycleStock): bool
        {
        }

        public function create(User $user): bool
        {
        }

        public function update(User $user, MotorcycleStock $motorcycleStock): bool
        {
        }

        public function delete(User $user, MotorcycleStock $motorcycleStock): bool
        {
        }

        public function restore(User $user, MotorcycleStock $motorcycleStock): bool
        {
        }

        public function forceDelete(User $user, MotorcycleStock $motorcycleStock): bool
        {
        }
    }
