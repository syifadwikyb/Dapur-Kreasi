<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    public function users()
    {
        return $this->belongsToMany(user::class, 'pivot', 'recipeId', 'userId');
    }
}
