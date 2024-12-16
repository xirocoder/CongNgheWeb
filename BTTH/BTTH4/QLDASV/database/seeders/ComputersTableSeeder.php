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
                'computer_name' => $faker->unique()->regexify('Lab[0-9]{1,2}-PC[0-9]{2}'),
                'model' => $faker->randomElement([
                    'Dell Optiplex 7090', 
                    'HP EliteDesk 800 G6',
                    'Lenovo ThinkCentre M75t',
                    'Apple Mac Mini M1',
                    'Asus ExpertCenter D5'
                ]),
                'operating_system' => $faker->randomElement(['Windows 10', 'Windows 11', 'Linux', 'macOS']),
                'processor' => $faker->randomElement(['Intel Core i5', 'Intel Core i7', 'AMD Ryzen 5']),
                'memory' => $faker->randomElement([8, 16, 32]),
                'available' => $faker->boolean,
            ]);
        }
    }
}