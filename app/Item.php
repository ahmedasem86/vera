<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $fillable = ['name','notes'];
  public function works()
  {
      return $this->hasMany('App\Works');
  }
}
