<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_success_order()
    {
        $response = $this->post(route('orders.store'), [
            'name' => 'Alex'
        ]);

        $response->assertStatus(302);
    }
}
