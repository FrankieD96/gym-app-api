<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Get the exercises for the category.
     */
    public function exercises()
    {
        return $this->hasMany(Exercise::class); // A category has many exercises
    }
}

