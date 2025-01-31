<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
    public function place()
    {

        return $this->belongsTo(place::class);
    }
}
