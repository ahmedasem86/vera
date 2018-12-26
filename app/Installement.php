<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Payment;
use App\Unit;

class Installement extends Model
{
  protected $fillable = ['unit_id','cost' , 'due_date','remaining_cost'];

  public function unit()
  {
      return $this->belongsTo('App\Unit' , 'unit_id');
  }
  public function payments()
  {
      return $this->hasMany('App\Payment');
  }
}
