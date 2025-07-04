<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = [
            'Balkan',
            'Mary',
            'Lebap',
            'Dasoguz',
            'Ashagabat',
        ];

        foreach ($objs as $obj){
            City::create([
                'name' => $obj,
            ]);
        }
    }
}