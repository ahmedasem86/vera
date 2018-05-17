<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
  protected $fillable = ['name','address','contractor_id','mobile_no'];
  public function works()
  {
      return $this->hasMany('App\Works');
  }
}
