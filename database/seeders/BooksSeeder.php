<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;



class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 30; $i++) {
            DB::table('books')->insert([
                'title' => fake()->sentence(),
                'author' => fake()->name(),
                'category' => fake()->word(),
                'short_description' => fake()->paragraph(4),
                'price' => rand(5, 40),
                'img_url' => fake()->imageUrl(400, 800, true),
                'publisher' => fake()->name(),
                'edition' => fake()->words(rand(1, 3), true),
                'e_book' => fake()->boolean(),
                'publication_time' => fake()->date('d/m/Y'),
            ]);
        }
    }
}
