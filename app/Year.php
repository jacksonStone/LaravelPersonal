<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    public function languages()
    {
      return $this->hasMany(Language::class);
    }
    public function pois()
    {
      return $this->hasMany(Poi::class);
    }
}
