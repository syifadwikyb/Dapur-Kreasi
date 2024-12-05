<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public function recipes()
    {
        return $this->belongsToMany(recipe::class, 'pivot', 'userId', 'recipeId');
    }
}
