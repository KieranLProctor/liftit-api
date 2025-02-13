<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkoutPlan extends Model
{
    protected $fillable = [
        'name',
        'description',
        'is_global',
        'created_by_id',
    ];

    protected $casts = [
        'is_global' => 'boolean',
    ];

    public function workouts(): HasMany
    {
        return $this->hasMany(Workout::class);
    }
}
