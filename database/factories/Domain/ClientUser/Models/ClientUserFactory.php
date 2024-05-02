<?php

    namespace Database\Factories;

    use Domain\ClientUsers\Models\ClientUser;
    use Domain\Users\Models\User;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Carbon;

    class ClientUserFactory extends Factory
    {
        protected $model = ClientUser::class;

        public function definition(): array
        {
            return [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'firstname' => $this->faker->firstName(),
                'lastname' => $this->faker->lastName(),

                'user_id' => User::factory(),
            ];
        }
    }
