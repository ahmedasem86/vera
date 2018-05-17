<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
  protected $fillable = ['name','address','supplier_id_no','mobile_no'];
  public function purchases()
  {
      return $this->hasMany('App\Purchase');
  }
}
