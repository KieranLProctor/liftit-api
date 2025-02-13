<?php

use App\Http\Controllers\API\v1\EquipmentController;
use App\Http\Controllers\API\v1\ExerciseController;
use App\Http\Controllers\API\v1\UserController;
use App\Http\Controllers\API\v1\UserExerciseLogController;
use App\Http\Controllers\API\v1\WorkoutController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('/me', UserController::class)->except(['show', 'create', 'edit']);

    Route::apiResource('/me/exercise-logs', UserExerciseLogController::class)->except(['create', 'edit']);
    Route::apiResource('/me/exercise-logs.workouts', WorkoutController::class)->except(['create', 'edit'])->shallow();

    Route::apiResource('/equipments', EquipmentController::class)->except(['create', 'edit']);
    Route::apiResource('/equipments.exercise', ExerciseController::class)->except(['create', 'edit'])->shallow();
});

// /me/workout-plans
// /me/workout-plans/{plan}
// /me/workout-plans/{plan}/workouts
// /me/workout-plans/{plan}/workouts/{workout}
// /me/workout-plans/{plan}/workouts/{workout}/exercises
// /me/workout-plans/{plan}/workouts/{workout}/exercises/{exercise}
// /me/workout-plans/{plan}/workouts/{workout}/exercises/{exercise}/equipment

// /equipments
// /equipments/{equipment}/exercises
// /equipments/{equipment}/exercises/{exercise}

// /exercises
// /exercises/{exercise}/equipment
