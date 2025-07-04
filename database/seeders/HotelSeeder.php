<?php

namespace Database\Seeders;


use App\Models\City;
use App\Models\Hotel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $city = City::inRandomOrder()->first();
        $objs = [
            'Arzuw',
            'Celeken',
            'kemran',
            'Yelken',
            'Kenar',
            'AltynAsyr',
            'Garagum',
        ];

        foreach ($objs as $obj){
            Hotel::create([
                'name'=> $obj,
                'city_id' => $city->id,
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber(),
                'email'=> fake()->email(),
                'image' => null,
                'star' => fake()->numberBetween(1,5),
                
            ]);
        }
    }
}
