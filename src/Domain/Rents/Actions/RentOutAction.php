<?php

    namespace Domain\Rents\Actions;

    use Domain\Rents\DataTransferObjects\RentOutDTO;
    use Domain\Rents\Models\Rent;

    class RentOutAction
    {
        public function __invoke(
            RentOutDTO $rentOutDTO
        ): Rent
        {
            $rent = Rent::where('id', $rentOutDTO->rent_id)->firstOrFail();
            $rent->return_date = $rentOutDTO->return_date;
            $rent->comment_out = $rentOutDTO->comment_out;
            $rent->returned = $rentOutDTO->returned;
            $rent->save();

            $newRent = Rent::with(['clientUser', 'motorcycleStock', 'motorcycleStock.motorcycle'])->where('id', $rent->id)->first();

            return $newRent->refresh();
        }

    }
