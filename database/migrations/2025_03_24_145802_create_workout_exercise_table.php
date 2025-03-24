<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('workout_exercise', function (Blueprint $table) {
        $table->id();
        $table->foreignId('workout_id')->constrained();  // Foreign key to workouts
        $table->foreignId('exercise_id')->constrained(); // Foreign key to exercises
        $table->integer('sets');  // Number of sets
        $table->integer('reps');  // Number of reps
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('workout_exercise');
}

};
