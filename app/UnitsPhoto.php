<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitsPhoto extends Model
{
  protected $fillable = ['unit_id', 'filename'];

public function unit()
{
  return $this->belongsTo('App\Unit');
}
}
