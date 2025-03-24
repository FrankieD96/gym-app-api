<?php

namespace App\Http\Controllers;

use App\Models\Workout;
// use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function index()
    {
        $workouts = Workout::with('exercises')->get(); // Get all workouts
        return response()->json($workouts); // Return as JSON response
    }
}
