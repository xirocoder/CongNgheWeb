<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('classes')->insert([
                'grade_level' => $faker->randomElement(['Pre-K', 'Kindergarten']),
                'room_number' => 'Room ' . $faker->numberBetween(1, 20),
            ]);
        }
    }
}
