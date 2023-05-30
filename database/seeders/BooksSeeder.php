<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");

        for ($i=0; $i < 10; $i++) {
            Books::create([
                "book_id" => mt_rand(1,3),
                "title" => $faker->sentence()
            ]);
        }
    }
}
