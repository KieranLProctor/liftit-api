<?php

use App\Http\Controllers\v1\EquipmentController;
use App\Http\Controllers\v1\ExerciseController;
use App\Http\Controllers\v1\UserController;
use App\Http\Controllers\v1\UserExerciseLogController;
use App\Http\Controllers\v1\UserWorkoutPlanController;
use App\Http\Controllers\v1\WorkoutController;
use App\Http\Controllers\v1\WorkoutPlanController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::apiResource('/me', UserController::class)->except(['show', 'create', 'edit']);
        Route::apiResource('/me/exercise-logs', UserExerciseLogController::class)->except(['create', 'edit']);
        Route::apiResource('/me/workout-plans', UserWorkoutPlanController::class)->except(['create', 'edit']);

        Route::apiResource('/equipments', EquipmentController::class)->except(['create', 'edit']);

        Route::apiResource('/exercises', ExerciseController::class)->except(['create', 'edit']);

        Route::apiResource('/workout-plans', WorkoutPlanController::class)->except(['create', 'edit']);
    });

    Route::apiResource('/workouts', WorkoutController::class)->except(['create', 'edit']);
});
