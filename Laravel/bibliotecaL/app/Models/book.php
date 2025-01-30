<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    public function genre()
    {

        return $this->belongsTo(genre::class);
    }
}
