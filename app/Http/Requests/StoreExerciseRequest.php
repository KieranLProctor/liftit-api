<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExerciseRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];

        $table->string('name');
        $table->string('muscle_group');
        $table->foreignId('equipment_id')->constrained('equipments');
        $table->string('type');
        $table->unsignedTinyInteger('difficulty')->default(1);
    }
}
