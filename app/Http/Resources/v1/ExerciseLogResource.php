<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExerciseLogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'workout_id' => $this->workout_id,
            'exercise_id' => $this->exercise_id,
            'sets' => $this->sets,
            'reps' => $this->reps,
            'units' => $this->units,
            'weight' => $this->weight
        ];
    }
}
