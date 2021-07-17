<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePageTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHomePage()
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function testRedirectIfUserNotAuth(){

        $this->get('/home')->assertRedirect(route('login'));

    }

}
