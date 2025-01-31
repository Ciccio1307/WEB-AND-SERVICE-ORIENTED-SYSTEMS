<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    public function tour()
    {

        return $this->hasMany(tour::class);
    }
}
