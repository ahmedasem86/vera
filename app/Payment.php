<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Installement;
class Payment extends Model
{
  protected $fillable = ['installement_id','payed'];

  public function installement()
  {
      return $this->belongsTo('App\Installement' , 'installement_id');
  }
}
