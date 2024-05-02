<?php

    namespace Tests\Unit\ClientUsers\Actions;

    use Domain\ClientUsers\Actions\CreateClientUserAction;
    use Domain\ClientUsers\DataTransferObjects\CreateClientUserDTO;
    use Domain\ClientUsers\Models\ClientUser;
    use Illuminate\Foundation\Testing\DatabaseMigrations;
    use Tests\TestCase;

    class CreateClientUserActionTest extends TestCase
    {
        use DatabaseMigrations;

        public function testCanCreateClientUser()
        {
            $clientUser = (new CreateClientUserAction)(new CreateClientUserDTO("firstName", "lastName", "some_uuid"));

            $clientUserDB = ClientUser::find($clientUser->id);

            $this->assertEquals($clientUserDB->id, $clientUser->id);
        }

    }
