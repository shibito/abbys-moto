<?php

    namespace Domain\Motorcycle\Actions;

    use Application\Api\Collections\MotorcycleCollection;
    use Domain\Motorcycle\Models\Motorcycle;

    class GetMotorcycleAction
    {
        public function __invoke(
            ?string $search
        ): MotorcycleCollection
        {
            return new MotorcycleCollection(Motorcycle::query()
                ->search($search)
                ->paginate()
            );
        }

    }
