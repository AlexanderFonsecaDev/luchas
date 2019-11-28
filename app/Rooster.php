<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rooster extends Model
{
    public function type()
    {
        return $this->hasOne(Type::class);
    }

    public function color()
    {
        return $this->hasOne(Color::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class)->withTimestamps();
    }

    public function fights()
    {
        return $this->hasMany(Fight::class);
    }


}
