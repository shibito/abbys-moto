<?php

    namespace Database\Factories;

    use Domain\Motorcycle\Models\Motorcycle;
    use Domain\Motorcycle\Models\MotorcycleStock;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class MotorcycleStockFactory extends Factory
    {
        protected $model = MotorcycleStock::class;

        public function definition(): array
        {
            return [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'plate' => $this->faker->word(),
                'details' => $this->faker->word(),

                'motorcycle_id' => Motorcycle::factory(),
            ];
        }
    }
