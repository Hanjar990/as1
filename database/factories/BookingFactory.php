<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $guest = Guest::inRandomOrder()->first();
        $room = Room::inRandomOrder()->first();
        return [
            'room_id' => $room->id,
            'guest_id'=> $guest->id,
            'chech_in_at' => fake()->date(),
            'chech_out_at' => fake()->date(),
            'created_at' => now(),
            'updated_at'=> now(),
        ];
    }
}