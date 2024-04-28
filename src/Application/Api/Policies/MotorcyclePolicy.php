<?php

namespace Application\Api\Policies;

use Domain\Motorcycle\Models\Motorcycle;
use Domain\Users\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MotorcyclePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Motorcycle $motorcycle): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Motorcycle $motorcycle): bool
    {
    }

    public function delete(User $user, Motorcycle $motorcycle): bool
    {
    }

    public function restore(User $user, Motorcycle $motorcycle): bool
    {
    }

    public function forceDelete(User $user, Motorcycle $motorcycle): bool
    {
    }
}
