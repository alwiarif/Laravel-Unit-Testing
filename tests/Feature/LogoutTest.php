<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LogoutTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testLogoutAccess()
    // {
    //     $user = User::factory()->create();

    //     $this->actingAs($user);
    //     $response = $this->post('/logout')->assertStatus(200);
    // }

    public function testUserLogout() {

        $user = User::factory()->create();

        $this->actingAs($user);

        $this->post('/logout')->assertSessionHas('message')->assertRedirect(route('login'));

    }

}
