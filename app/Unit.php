<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
  protected $fillable = ['floor_no','flat_no','land_id','area','price','unit_type'];

  public function lands()
    {
      return $this->belongsTo('App\Land');
    }
}
