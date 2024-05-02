<?php

    namespace Tests\Motorcycle\Actions;

    use Database\Seeders\DatabaseSeeder;
    use Domain\Motorcycle\Actions\GetMotorcycleAction;
    use Domain\Motorcycle\Models\Motorcycle;
    use Illuminate\Foundation\Testing\DatabaseMigrations;
    use Tests\TestCase;

    class GetMotorcycleActionTest extends TestCase
    {
        use DatabaseMigrations;

        protected function setUp(): void
        {
            parent::setUp();
            $mcData = DatabaseSeeder::$mcSeed;

            collect($mcData)->map(function ($mc) {
                Motorcycle::create($mc);
            });
        }



        public function testSearchNinjaMC()
        {
            $result = (new GetMotorcycleAction())("ninja");

            dd($result->toJson());

            $this->assertCount(4, $result['total']);

        }

    }
