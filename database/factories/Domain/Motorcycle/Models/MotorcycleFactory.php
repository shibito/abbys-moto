<?php

namespace Database\Factories\Domain\Motorcycle\Models;

use Domain\Motorcycle\Models\Motorcycle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MotorcycleFactory extends Factory
{
    protected $model = Motorcycle::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'make' => $this->faker->word(),
            'model' => $this->faker->word(),
            'year' => $this->faker->randomNumber(),
            'type' => $this->faker->word(),
            'displacement' => $this->faker->word(),
            'engine' => $this->faker->word(),
            'power' => $this->faker->word(),
            'torque' => $this->faker->word(),
            'compression' => $this->faker->word(),
            'bore_stroke' => $this->faker->word(),
            'fuel_system' => $this->faker->word(),
            'fuel_control' => $this->faker->word(),
            'ignition' => $this->faker->word(),
            'cooling' => $this->faker->word(),
            'gearbox' => $this->faker->word(),
            'transmission' => $this->faker->word(),
            'clutch' => $this->faker->word(),
            'frame' => $this->faker->word(),
            'front_suspension' => $this->faker->word(),
            'front_wheel_travel' => $this->faker->word(),
            'rear_suspension' => $this->faker->word(),
            'rear_wheel_travel' => $this->faker->word(),
            'front_tire' => $this->faker->word(),
            'rear_tire' => $this->faker->word(),
            'front_brakes' => $this->faker->word(),
            'rear_brakes' => $this->faker->word(),
            'total_weight' => $this->faker->word(),
            'seat_height' => $this->faker->word(),
            'total_height' => $this->faker->word(),
            'total_length' => $this->faker->word(),
            'total_width' => $this->faker->word(),
            'ground_clearance' => $this->faker->word(),
            'wheelbase' => $this->faker->word(),
            'fuel_capacity' => $this->faker->word(),
            'starter' => $this->faker->word(),
        ];
    }
}
