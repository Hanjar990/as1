<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $city = City::inRandomOrder()->first();
        $hotel = Hotel::inRandomOrder()->first();
        return [
            'city_id' => $city->id,
            'name' => $city->name,
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'email'=> fake()->email(),
            'image' => null,
            'star' => fake()->numberBetween(1,5),
        ];
    }
}