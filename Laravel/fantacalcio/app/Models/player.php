<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    public function team()
    {
        return $this->belongsTo(team::class);
    }
}
