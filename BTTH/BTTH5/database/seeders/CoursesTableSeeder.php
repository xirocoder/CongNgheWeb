<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('courses')->insert([
                'name' => $faker->name,
                'description' => $faker->sentence,
                'difficulty' => $faker->randomElement(['beginner','intermediate','advanced']),
                'price' => $faker->randomNumber(2, 1000, 100000),
                'start_date' => $faker->dateTimeThisYear(),
                'created_at' => now(),
                'updated_at' => now(),                
            ]);
        }
    }
}
