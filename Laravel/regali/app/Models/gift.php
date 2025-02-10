<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gift extends Model
{
    public function kid()
    {

        return $this->hasMany(kid::class);
    }
}
