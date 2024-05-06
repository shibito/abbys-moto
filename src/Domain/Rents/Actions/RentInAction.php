<?php

    namespace Domain\Rents\Actions;

    use Application\Api\Resource\RentResource;
    use Domain\Rents\DataTransferObjects\RentInDTO;
    use Domain\Rents\Models\Rent;

    class RentInAction
    {
        public function __invoke(
            RentInDTO $rentInDTO,
        ): Rent
        {
            $rent = new Rent((array)$rentInDTO);

            $rent->save();

            $newRent = Rent::with(['clientUser', 'motorcycleStock', 'motorcycleStock.motorcycle'])->where('id', $rent->id)->first();

            return $newRent->refresh();
        }

    }
