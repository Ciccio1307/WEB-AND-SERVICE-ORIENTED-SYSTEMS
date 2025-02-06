<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    public function genre()
    {

        return $this->belongsTo(genre::class);
    }
}
