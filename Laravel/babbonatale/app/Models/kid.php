<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kid extends Model
{
    public function present()
    {

        return $this->hasMany(present::class);
    }
}
