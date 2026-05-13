<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Iluminate\Support\Facades\DB;
use Iluminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product')->insert([
            'name' => fake()->name(), //Str::random(10),
            'price' => rand(1000, 10000),
            'description' => fake()->text(100), //Str::random(20),
            'status' => ['new', 'used'][rand(0, 1)],
            'is_active' => true,
            'release_date' => now()->subDays(rand(1, 365)),
        ]);
    }
}
