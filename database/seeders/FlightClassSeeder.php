<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('flight_classes')->insert([
            ['name' => 'Economy'],
            ['name' => 'Business'],
        // Add more classes as needed
        ]);
    }

}
