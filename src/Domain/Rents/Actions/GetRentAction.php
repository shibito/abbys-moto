<?php

    namespace Domain\Rents\Actions;

    use Application\Api\Collections\RentCollection;
    use Domain\Rents\Models\Rent;

    class GetRentAction
    {
        public function __invoke(
            ?bool $returned = null
        ): RentCollection
        {
            return new RentCollection(Rent::query()
                ->with(['clientUser', 'motorcycleStock', 'motorcycleStock.motorcycle'])
                ->returned($returned)
                ->paginate()
            );
        }

    }
