<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function home()
  {
    $users = User::all();
      return view('vendor.adminlte.users.home',compact('users'));
  }
}
