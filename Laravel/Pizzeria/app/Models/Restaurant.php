<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function Restaurant() {}

    public function chef()
    {
        return $this->belongsTo(Chef::class);
    }
}
