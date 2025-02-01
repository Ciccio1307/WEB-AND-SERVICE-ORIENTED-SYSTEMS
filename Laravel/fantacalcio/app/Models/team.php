<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    public function player()
    {
        return $this->hasMany(player::class);
    }
}
