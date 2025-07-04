<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $room = Room::inRandomOrder()->first();
        return [
            'room_id' => $room->id,
            'name' => fake()->name,
            'password_number' => fake()->ean8(),
            'created_at' => now(),
            'updated_at'=> now(),

            
        ];
    }
}