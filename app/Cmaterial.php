<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cmaterial extends Model
{
  protected $fillable = ['name','unit','notes'];
  public function purchases()
  {
      return $this->hasMany('App\Cpurchase');
  }
}
