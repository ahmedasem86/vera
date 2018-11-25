<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  protected $fillable = ['name' , 'id_no','address', 'mobile_no' , 'fixed_salary'];

  public function salary()
  {
      return $this->hasMany('App\Salary');
  }
}
