<?php

    namespace Database\Factories\Domain\Rent\Models;

    use Domain\ClientUsers\Models\ClientUser;
    use Domain\Motorcycle\Models\MotorcycleStock;
    use Domain\Rents\Models\Rent;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class RentFactory extends Factory
    {
        protected $model = Rent::class;

        public function definition(): array
        {
            return [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'from_date' => Carbon::now(),
                'to_date' => Carbon::now(),
                'comment_in' => $this->faker->word(),
                'comment_out' => $this->faker->word(),
                'returned' => $this->faker->boolean(),

                'client_user_id' => ClientUser::factory(),
                'motorcycle_stock_id' => MotorcycleStock::factory(),
            ];
        }
    }
