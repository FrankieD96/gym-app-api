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
    Schema::create('workout_exercises', function (Blueprint $table) {
        $table->id();
        $table->foreignId('workout_id')->constrained()->onDelete('cascade'); // Workout foreign key
        $table->foreignId('exercise_id')->constrained()->onDelete('cascade'); // Exercise foreign key
        $table->integer('sets')->default(3); // Number of sets
        $table->integer('reps')->default(10); // Number of reps
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('workout_exercises');
}

};
