<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    
    use RefreshDatabase;

    public function testRegistrationPageAccess(){

        $register = $this->get('/register')->assertStatus(200);

    }

    public function testRegistrationPageFailedAcces(){

        $register = $this->get('/registers')->assertStatus(404);

    }

    public function testRegisterUser() {

        $user = User::factory()->make();

        $response = $this->post('/register', $user->toArray());
        $this->assertAuthenticated();


        $response->assertRedirect('/home');
    }

}
