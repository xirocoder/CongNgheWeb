<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('students')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'date_of_birth' => $faker->dateTimeBetween('-15 years', '-5 years')->format('Y-m-d'), // Học sinh 5-15 tuổi
                'parent_phone' => $faker->phoneNumber,
                'class_id' => $faker->numberBetween(1, 5), // Tham chiếu ngẫu nhiên đến các lớp
            ]);
        }
    }
}
