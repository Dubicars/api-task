<?php

namespace Database\Factories;

use Faker\Provider\FakeCar;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new FakeCar($this->faker));

        return [
            'make' => $this->faker->vehicleBrand(),
            'model' => $this->faker->vehicleModel(),
            'year' => $this->faker->year(),
            'price' => $this->faker->numberBetween(50_000_00, 300_000_00),
            'country' => $this->faker->country(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'image_path' => '/images/' . $this->faker->randomElement(
                File::files(public_path('images'))
            )->getFilename()
        ];
    }
}
