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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the exercise (e.g., "Squat", "Push-up")
            $table->text('description')->nullable(); // Optional description of the exercise
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Category foreign key
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('exercises');
    }
    
};
