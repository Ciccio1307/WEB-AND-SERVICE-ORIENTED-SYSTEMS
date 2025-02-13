<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    public function book()
    {
        return $this->belongsTo(book::class);
    }
}
