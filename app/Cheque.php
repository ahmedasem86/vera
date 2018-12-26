<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cheque extends Model
{
  protected $fillable = ['user_id','cclient_id','cheque_id','value','receiving_date','notes'];
  public function user()
  {
      return $this->belongsTo('App\User' , 'user_id');
  }
  public function cclient()
  {
      return $this->belongsTo('App\Cclient' , 'cclient_id');
  }
}
