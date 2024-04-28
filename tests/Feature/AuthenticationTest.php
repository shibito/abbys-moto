<?php

    namespace Tests\Feature;

    use Domain\Users\Models\User;
    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Laravel\Sanctum\Sanctum;
    use Tests\TestCase;

    class AuthenticationTest extends TestCase
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

        public function testIsUnAuthenticated()
        {
            $response = $this->getJson('/api/user');

            $response->assertStatus(401);
            $response->assertJson(['message' => "Unauthenticated."]);
        }

        public function testIsAuthenticated()
        {
            Sanctum::actingAs(User::first());

            $response = $this->getJson('/api/user');

            $response->assertStatus(200);
            $response->assertJsonFragment([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }

        public function testLogin()
        {
            $loginResponse = $this->postJson('/api/login', ['email' => 'test@example.com', 'password' => 'password']);

            $loginResponse->assertStatus(200);
            $loginResponse->assertJsonFragment([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);

            // Check if Log-in token is valid
            $response = $this->getJson('/api/user', ['Authorization', 'Bearer ' . $loginResponse->json()['message']['access_token']]);

            $response->assertStatus(200);
            $response->assertJsonFragment([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);

        }

        public function testLogout()
        {
            $loginResponse = $this->postJson('/api/login', ['email' => 'test@example.com', 'password' => 'password']);

            // Check if Log-in token is valid
            $logoutResponse = $this->getJson('/api/logout', ['Authorization', 'Bearer ' . $loginResponse->json()['message']['access_token']]);
            $logoutResponse->assertStatus(200);
            $logoutResponse->assertJsonFragment([
                'message' => 'Logged out',
            ]);
        }

    }
