<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        DB::table("employees")->insert([
            "name" => $faker->name(),
            "email" => $faker->safeEmail,
            "salary" => $faker->randomNumber(),
            "phone" => $faker->phoneNumber
        ]);
    }
}
