<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('computers')->insert([
                'computer_name' => $faker->word . '-' . $faker->randomLetter . $faker->randomDigit,
                'model' => $faker->sentence(3),
                'operating_system' => $faker->randomElement(['Windows 10', 'Windows 11', 'Linux', 'macOS']),
                'processor' => $faker->randomElement(['Intel Core i5', 'Intel Core i7', 'AMD Ryzen 5']),
                'memory' => $faker->randomElement([8, 16, 32]),
                'available' => $faker->boolean,
            ]);
        }
    }
}
