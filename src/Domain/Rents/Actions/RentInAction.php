<?php

    namespace Domain\Rents\Actions;

    use Application\Api\Resource\RentResource;
    use Domain\Rents\DataTransferObjects\RentInDTO;
    use Domain\Rents\Models\Rent;

    class RentInAction
    {
        public function __invoke(
            RentInDTO $rentInDTO,
        ): RentResource
        {
            $rent = new Rent((array)$rentInDTO);

            $rent->save();

            return new RentResource($rent);
        }

    }
