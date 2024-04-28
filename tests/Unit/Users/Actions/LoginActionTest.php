<?php

namespace Tests\Unit\Users\Actions;

use Domain\Users\Actions\LoginAction;
use Domain\Users\DataTransferObjects\LoginDataTransferObject;
use Domain\Users\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginActionTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }

    public function testActionUnauthorized()
    {

        $result = (new LoginAction())(new LoginDataTransferObject('wrong_username', 'wrong_password'));

        $this->assertEquals(401, $result->status());
        $this->assertEquals(["message" => "Unauthorized"], $result->original);
    }

    public function testIsAuthenticated()
    {
        $result = (new LoginAction())(new LoginDataTransferObject('test@example.com', 'password'));

        $this->assertEquals(200, $result->status());
        $this->assertArrayHasKey("message", $result->original);
        $this->assertArrayHasKey("access_token", $result->original['message']);
        $this->assertArrayHasKey("user", $result->original['message']);
        $this->assertNotEquals(["message" => "Unauthorized"], $result->original);
    }


}
