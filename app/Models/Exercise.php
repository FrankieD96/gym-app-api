<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    /**
     * Get the category that owns the exercise.
     */
    public function category()
    {
        return $this->belongsTo(Category::class); // An exercise belongs to one category
    }

    /**
     * The workouts that belong to the exercise.
     */
    public function workouts()
{
    return $this->belongsToMany(Workout::class, 'workout_exercise')
                ->withPivot('sets', 'reps')
                ->withTimestamps();
}

}

