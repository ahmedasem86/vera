<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
  protected $fillable = ['floor_no','flat_no','land_id','area','price','unit_type','description'];

  public function lands()
    {
      return $this->belongsTo('App\Land' , 'land_id');
    }
    public function photos()
    {
        return $this->hasMany('App\UnitsPhoto');
    }
    public function client()
    {
        return $this->belongsTo('App\Client' , 'client_id');
    }
}
