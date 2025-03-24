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
    Schema::create('workouts', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Name of the workout
        $table->text('description')->nullable(); // Optional workout description
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User who created the workout
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('workouts');
}

};
