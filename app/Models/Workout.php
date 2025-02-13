<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Workout extends Model
{
    protected $fillable = [
        'workout_plan_id',
        'name',
        'day_of_week'
    ];

    public function plan(): BelongsTo
    {
        return $this->belongsTo(WorkoutPlan::class);
    }
}
