<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    protected $fillable = ['name','type','address','area','price','predicted_cost','contract_date','delivery_date'];
}
