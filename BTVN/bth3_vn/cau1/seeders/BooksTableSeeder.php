<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $lib_id=DB::table('libraries')->pluck('id');
        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'title'=>$faker->sentence($nbWords = 3),
                'author'=>$faker->name,
                'publication_year'=>$faker->year,
                'genre'=>$faker->word,
                'library_id'=>$faker->randomElement($lib_id)
            ]);
        }
    }
}