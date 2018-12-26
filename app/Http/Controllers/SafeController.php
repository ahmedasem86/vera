<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
use App\Work;
use App\Salary;
use App\Cpurchase;
use App\Payment;
use App\Cheque;

class SafeController extends Controller
{
  public function index()
  {
      $from_date = (!empty($_GET['from_date']))? $_GET['from_date'] : date('Y-m-d');
      $to_date = (!empty($_GET['to_date']))? $_GET['to_date'] : date('Y-m-d' , strtotime("+1 day"));

      $section = (!empty($_GET['section']))? $_GET['section'] : 'all';
      if($section == 'const'){
        $works = Work::where('created_at','>=',$from_date)
                       ->where('created_at','<=',$to_date)
                       ->with('lands','items','contractors')->get();
        $purchases = Purchase::where('created_at','>=',$from_date)
                               ->where('created_at','<=',$to_date)
                               ->with('materials','lands','suppliers')->get();
      }elseif ($section == 'clean') {
        $salaries = Salary::where('created_at','>=',$from_date)
                            ->where('created_at','<=',$to_date)
                            ->with('employee')->get();
        $cpurchases = Cpurchase::where('created_at','>=',$from_date)
                                 ->where('created_at','<=',$to_date)
                                 ->with('material','client','supplier')->get();
      }else{
        $works = Work::where('created_at','>=',$from_date)
                       ->where('created_at','<=',$to_date)
                       ->with('lands','items','contractors')->get();
        $purchases = Purchase::where('created_at','>=',$from_date)
                               ->where('created_at','<=',$to_date)
                               ->with('materials','lands','suppliers')->get();
        $salaries = Salary::where('created_at','>=',$from_date)
                            ->where('created_at','<=',$to_date)
                            ->with('employee')->get();
        $cpurchases = Cpurchase::where('created_at','>=',$from_date)
                                ->where('created_at','<=',$to_date)
                                ->with('material','client','supplier')->get();
      }


      return view('vendor.adminlte.safe.home',compact('works' , 'purchases' , 'salaries' , 'cpurchases','from_date','to_date'));
  }
  public function income()
  {
      $from_date = (!empty($_GET['from_date']))? $_GET['from_date'] : date('Y-m-d');
      $to_date = (!empty($_GET['to_date']))? $_GET['to_date'] : date('Y-m-d' , strtotime("+1 day"));

      $section = (!empty($_GET['section']))? $_GET['section'] : 'all';
      if($section == 'const'){
        $payments = Payment::where('created_at','>=',$from_date)
                                ->where('created_at','<=',$to_date)
                                ->with('installement.unit.client','installement.unit.lands')->get();
      }elseif ($section == 'clean') {
        $cheques = Cheque::where('created_at','>=',$from_date)
                            ->where('created_at','<=',$to_date)
                            ->with('cclient')->get();
      }else{
        $payments = Payment::where('created_at','>=',$from_date)
                                ->where('created_at','<=',$to_date)
                                ->with('installement.unit.client','installement.unit.lands')->get();
        $cheques = Cheque::where('created_at','>=',$from_date)
                                ->where('created_at','<=',$to_date)
                                ->with('cclient')->get();
      }


      return view('vendor.adminlte.safe.income',compact('payments','cheques','from_date','to_date'));
  }
}
