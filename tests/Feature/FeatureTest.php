<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FeatureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testRegisterPageStatusCode()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    public function testLoginPageStatusCode()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function testAboutPageStatusCode()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }
    public function testContactPageStatusPage()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }
}
