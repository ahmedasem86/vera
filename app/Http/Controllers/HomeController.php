<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee ;
use App\Client ;
use App\Installement ;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $employee = Employee::all();
      $clients = Client::all();
      $installements_due = Installement::where('remaining_cost','>',0)->where('due_date','<=',date('Y-m-d'))->with('unit.client')->get();
      $installements_coming = Installement::where('remaining_cost','>',0)->where('due_date','>',date('Y-m-d'))->where('due_date','<=', date('Y-m-d' , strtotime("+1 month")))->with('unit.client')->get();

        return view('vendor.adminlte.home',compact('employee','clients','installements_due','installements_coming'));
    }
}
