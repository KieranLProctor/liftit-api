<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Equipment extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function exercises(): HasMany
    {
        return $this->hasMany(Exercise::class);
    }
}
