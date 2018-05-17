<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    protected $fillable = ['name','type','address','area','price','predicted_cost','contract_date','delivery_date'];
    public function partners()
      {
        return $this->belongsToMany('App\Partner','land_partners')->withPivot('land_percentage', 'construction_percentage','total_percentage');
      }

      public function works()
      {
          return $this->hasMany('App\Works');
      }
      public function units()
      {
          return $this->hasMany('App\Unit');
      }
      public function purchases()
      {
          return $this->hasMany('App\Purchase');
      }
}
