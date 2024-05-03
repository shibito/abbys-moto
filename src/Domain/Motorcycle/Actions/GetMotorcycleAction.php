<?php

    namespace Domain\Motorcycle\Actions;

    use Application\Api\Collections\MotorcycleCollection;
    use Domain\Motorcycle\DataTransferObjects\GetMotorcycleDTO;
    use Domain\Motorcycle\Models\Motorcycle;

    class GetMotorcycleAction
    {
        public function __invoke(
            GetMotorcycleDTO $getMotorcycleDTO
        ): MotorcycleCollection
        {
            return new MotorcycleCollection(Motorcycle::query()
//                ->has('stocks')
                ->hasStock($getMotorcycleDTO->stock)
                ->search($getMotorcycleDTO->search)
                ->with(['stocks'])
                ->withCount('stocks')
                ->paginate()
            );
        }

    }
