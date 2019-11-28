<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{
    public function roosters()
    {
        return $this->hasMany(Rooster::class);
    }
}
