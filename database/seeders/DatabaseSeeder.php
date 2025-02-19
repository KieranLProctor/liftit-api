<?php

namespace Database\Seeders;

use Database\Seeders\v1\UserSeeder;
use Database\Seeders\v1\WorkoutPlanSeeder;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            WorkoutPlanSeeder::class,
        ]);
    }
}
