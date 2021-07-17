<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RedirectAboutPageTest extends TestCase
{
    use RefreshDatabase;

    public function testRedirectAboutPage(){

        $this->withoutExceptionHandling();
        $this->get('/about-page')->assertRedirect('/about');

    }

    public function testAboutPage() {

        $this->get('/about')->assertStatus(200);

    }
}
