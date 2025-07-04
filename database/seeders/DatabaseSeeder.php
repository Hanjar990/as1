<?php

namespace Database\Seeders;
// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use App\Models\Room;
use App\Models\Guest;
use App\Models\Hotel;
use App\Models\Booking;
use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\HotelSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CitySeeder::class,
            HotelSeeder::class,
            RoomSeeder::class,
        ]);
        Guest::factory()->count(100)->create();
        Booking::factory()->count(100)->create();
        
    }
}