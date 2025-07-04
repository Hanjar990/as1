<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\Hotel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotel = Hotel::inRandomOrder()->first();
        
        $objs = [
            'Single',
            'Double',
            'Suite',

        ];
        foreach ($objs as $obj) {
            Room::create([
                'type' => $obj,
                'hotel_id' => $hotel->id,
                'room_number' => fake()->numberBetween(1,500),
                'per_night_price' => fake()->numberBetween(900,5000),
            ]);
        }
    }
}