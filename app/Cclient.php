<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cclient extends Model
{
  protected $fillable = ['name','address','contract_date','end_date'];


  public function purchases()
  {
      return $this->hasMany('App\Cpurchase');
  }
  public function cheques()
  {
      return $this->hasMany('App\Cheque');
  }
}
