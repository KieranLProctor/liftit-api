<?php

namespace App\Models;

use App\Enums\MuscleGroups;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Exercise extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
        'name',
        'muscle_group',
        'equipment_id',
        'type',
        'difficulty'
    ];

    protected $casts = [
        'muscle_group' => MuscleGroups::class,
    ];

    public function equipment(): BelongsTo
    {
        return $this->belongsTo(Equipment::class);
    }

    public function logs(): HasMany
    {
        return $this->hasMany(ExerciseLog::class);
    }

    public function users(): HasManyThrough
    {
        return $this->hasManyThrough(User::class, ExerciseLog::class);
    }
}
