<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    /**
     * A workout belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class); // Each workout belongs to one user
    }

    /**
     * A workout can have many exercises.
     */
    public function exercises()
{
    return $this->belongsToMany(Exercise::class, 'workout_exercise')
                ->withPivot('sets', 'reps')
                ->withTimestamps();
}

}
