<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        DB::table("Products")->insert([
            "name" => $faker->name(),
            "description" => $faker->randomElement(),
            "price" => $faker->randomNumber(),
        ]);
    }
}
