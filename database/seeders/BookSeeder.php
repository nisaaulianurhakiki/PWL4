<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('books')->insert([
                'title' => \Faker\Factory::create()->sentence,
                'author' => \Faker\Factory::create()->name,
                'year' => \Faker\Factory::create()->year,
                'publisher' => \Faker\Factory::create()->company,
                'city' => \Faker\Factory::create()->city,
                'cover' => \Faker\Factory::create()->imageUrl, // Anda dapat menggunakan metode lain jika Anda memiliki URL gambar
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
