<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
  protected $fillable = ['name','address','partner_id'];

  public function lands()
    {
      return $this->belongsToMany('App\Land','land_partners');
    }
}
