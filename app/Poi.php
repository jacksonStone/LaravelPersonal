<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poi extends Model
{
  public function descriptions()
  {
    return $this->hasMany(Description::class);
  }
}
