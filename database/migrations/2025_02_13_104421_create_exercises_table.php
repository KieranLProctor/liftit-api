<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('muscle_group');
            $table->foreignId('equipment_id')->constrained('equipments');
            $table->string('type');
            $table->unsignedTinyInteger('difficulty')->default(1);
            $table->timestamps();
        });
    }
};
