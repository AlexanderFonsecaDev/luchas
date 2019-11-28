<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function roosters()
    {
        return $this->belongsToMany(Rooster::class)->withTimestamps();
    }
}
