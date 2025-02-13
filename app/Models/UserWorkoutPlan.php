<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserWorkoutPlan extends Model
{
    protected $fillable = [
        'user_id',
        'workout_plan_id'
    ];


}
