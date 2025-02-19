<?php

namespace App\Models;

use App\Filters\v1\WorkoutFilters;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Workout extends Model
{
    use HasFactory, Filterable;

    protected string $default_filters = WorkoutFilters::class;

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
