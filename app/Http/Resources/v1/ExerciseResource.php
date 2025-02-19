<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExerciseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'muscle_group' => $this->muscle_group,
            'equipment_id' => $this->equipment_id,
            'type' => $this->type,
            'difficulty' => $this->difficulty,
        ];
    }
}
