<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function roosters()
    {
        return $this->hasMany(Rooster::class);
    }
}
