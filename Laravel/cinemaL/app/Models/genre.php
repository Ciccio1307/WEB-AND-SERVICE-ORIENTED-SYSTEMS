<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    public function film()
    {

        return $this->hasMany(film::class);
    }
}
