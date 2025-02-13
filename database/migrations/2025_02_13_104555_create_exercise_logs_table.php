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
        Schema::create('exercise_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('workout_id')->constrained('workouts');
            $table->foreignId('exercise_id')->constrained('exercises');
            $table->unsignedTinyInteger('sets')->default(1);
            $table->integer('reps')->default(1);
            $table->unsignedTinyInteger('units')->default(1);
            $table->decimal('weight')->default(0.0);
            $table->timestamps();
        });
    }
};
