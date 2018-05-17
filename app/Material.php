<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
  protected $fillable = ['name','notes','unit'];
  public function purchases()
  {
      return $this->hasMany('App\Purchase');
  }
}
