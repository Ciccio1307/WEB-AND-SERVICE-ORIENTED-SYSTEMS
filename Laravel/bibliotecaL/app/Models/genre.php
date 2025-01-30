<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    public function book()
    {
        return $this->hasMany(book::class);
    }
}
