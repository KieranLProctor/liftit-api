<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorkoutPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'workout_plan_id'
    ];


}
