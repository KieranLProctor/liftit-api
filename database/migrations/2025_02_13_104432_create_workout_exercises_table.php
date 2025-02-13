<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('workout_exercises', function (Blueprint $table) {
            $table->id();
            $table->foreignId('workout_id')->constrained('workouts');
            $table->foreignId('exercise_id')->constrained('exercises');
            $table->unsignedTinyInteger('default_sets')->default(1);
            $table->unsignedTinyInteger('default_reps')->default(1);
            $table->unsignedTinyInteger('default_units')->default(1);
            $table->decimal('default_weight')->default(0.0);
            $table->unsignedTinyInteger('order_index')->default(1);
            $table->timestamps();
        });
    }
};
