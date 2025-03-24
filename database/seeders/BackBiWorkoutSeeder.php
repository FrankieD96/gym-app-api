<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Exercise;
use App\Models\Workout;

class BackBiWorkoutSeeder extends Seeder
{
    public function run()
    {
        // Fetch the Back and Biceps categories
        $backCategory = Category::where('name', 'Back')->first();
        $armsCategory = Category::where('name', 'Arms')->first();

        // Create a new Workout for "Back + Bi"
        $workout = Workout::create([
            'name' => 'Back + Biceps Workout',
            'description' => 'A workout combining back and biceps exercises for strength and hypertrophy.',
            'user_id' => 1, // Assign it to a specific user (you can update this as needed)
        ]);

        // Add exercises to the workout by attaching exercises to it

        // Back exercises
        $backExercises = [
            ['name' => 'Pull-Ups', 'category_id' => $backCategory->id],
            ['name' => 'Lat Pulldowns', 'category_id' => $backCategory->id],
            ['name' => 'Barbell Rows', 'category_id' => $backCategory->id],
            ['name' => 'Dumbbell Rows', 'category_id' => $backCategory->id],
            ['name' => 'Deadlifts', 'category_id' => $backCategory->id],
        ];

        // Bicep exercises
        $bicepExercises = [
            ['name' => 'Bicep Curls', 'category_id' => $armsCategory->id],
            ['name' => 'Hammer Curls', 'category_id' => $armsCategory->id],
            ['name' => 'Preacher Curls', 'category_id' => $armsCategory->id],
        ];

        // Attach back exercises to the workout
        foreach ($backExercises as $exercise) {
            $exerciseInstance = Exercise::create($exercise);
            $workout->exercises()->attach($exerciseInstance, ['sets' => 4, 'reps' => 8]);  // 4 sets of 8 reps for example
        }

        // Attach bicep exercises to the workout
        foreach ($bicepExercises as $exercise) {
            $exerciseInstance = Exercise::create($exercise);
            $workout->exercises()->attach($exerciseInstance, ['sets' => 4, 'reps' => 10]);  // 4 sets of 10 reps for example
        }
    }
}
