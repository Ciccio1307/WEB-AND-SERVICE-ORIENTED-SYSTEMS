<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{


    public function restaurant()
    {

        $this->hasMany(Restaurant::class);
    }
}
