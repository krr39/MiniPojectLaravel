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
}
