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
    Schema::create('workout_logs', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User foreign key
        $table->foreignId('workout_id')->constrained()->onDelete('cascade'); // Workout foreign key
        $table->foreignId('exercise_id')->constrained()->onDelete('cascade'); // Exercise foreign key
        $table->integer('sets')->default(3); // Number of sets performed
        $table->integer('reps')->default(10); // Number of reps performed
        $table->decimal('weight', 5, 2)->nullable(); // Weight lifted (optional)
        $table->date('date'); // Date of the workout
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('workout_logs');
}

};
