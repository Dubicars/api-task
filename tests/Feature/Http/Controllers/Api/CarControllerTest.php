<?php

namespace Tests\Feature;

use App\Models\Car;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CarControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_api_returns_cars(): void
    {
        Car::factory()->count(7)->create();

        $this->getJson('/api/cars')
            ->assertOk(200)
            ->assertJsonCount(7, 'data');
    }
}
