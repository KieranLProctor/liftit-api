<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkoutExercise extends Model
{
    protected $fillable = [
        'workout_id',
        'default_sets',
        'default_reps',
        'default_units',
        'default_weight',
        'order_index',
    ];

    public function workout(): BelongsTo
    {
        return $this->belongsTo(Workout::class);
    }
}
