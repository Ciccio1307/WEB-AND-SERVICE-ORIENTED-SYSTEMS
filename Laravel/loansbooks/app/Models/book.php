<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public function loan()
    {
        return $this->hasMany(loan::class);
    }
}
