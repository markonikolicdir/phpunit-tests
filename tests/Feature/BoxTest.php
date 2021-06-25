<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BoxTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_box()
    {
        $response = $this->get('/api/box');

        $response->assertStatus(200);

        $this->assertEquals('Television', $response->decodeResponseJson()->offsetGet('name'));
    }
}
