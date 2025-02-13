<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class present extends Model
{
    public function kid()
    {

        return $this->belongsTo(kid::class);
    }
}
