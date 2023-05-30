<?php

namespace Database\Seeders;

use App\Models\Books;
use App\Models\Details;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Detail extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");
        $bookid = Books::pluck("id");
        $CountId = count($bookid);
        for ($i=0; $i < $CountId; $i++) {
            Details::create([
                "book_id" => $bookid[$i],
                "author" => $faker->name(),
                "date" => $faker->date(),
                "description" => $faker->paragraph()
            ]);
        }
    }
}
