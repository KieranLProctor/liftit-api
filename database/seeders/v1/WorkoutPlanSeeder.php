<?php

namespace Database\Seeders\v1;

use App\Models\WorkoutPlan;
use Illuminate\Database\Seeder;

class WorkoutPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkoutPlan::factory()
            ->count(5)
            ->create();
    }
}
