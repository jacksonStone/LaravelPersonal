<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function Year()
    {
      return $this->belongsTo(Year::class);
    }
}
