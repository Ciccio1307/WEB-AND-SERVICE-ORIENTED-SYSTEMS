<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kid extends Model
{
    public function gift()
    {

        return $this->belongsTo(gift::class);
    }
}
