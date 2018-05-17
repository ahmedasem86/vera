<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  protected $fillable = ['name','address','client_id_no','mobile_no'];

}
