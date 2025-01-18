<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create(); // Inisialisasi Faker

        // Generate 10 employees using Faker
        for ($i = 0; $i < 10; $i++) {
            DB::table('employees')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'position' => $faker->jobTitle(),
                'salary' => $faker->numberBetween(30000, 100000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}