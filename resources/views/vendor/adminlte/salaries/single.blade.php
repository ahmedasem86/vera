
@extends('adminlte::layouts.app')


@section('main-content')

<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <div class="col-md-8">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> {{$employee->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                  <tr>
                  <th> العنوان </th>
                  <td><b>{{$employee->address}}</b></td>
                </tr>
                <tr>
                  <th>الرقم القومي</th>
                  <td> {{$employee->id_no}} </td>
                </tr>
                <tr>
                  <th>رقم المحمول</th>
                  <td> {{$employee->mobile_no}}</td>
                </tr>
                <tr>
                  <th>الراتب</th>
                  <td> {{$employee->fixed_salary}} </td>
                </tr>

              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>

</div>
<div class="col-md-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">الشهور السابقة</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody><tr>
          <th>شهر</th>
          <th>مكافأة</th>
          <th>بدلات</th>
          <th>غيابات</th>
          <th>خصومات</th>
          <th>سلف</th>
          <th>بتاريخ</th>
          <th>الاجمالي</th>
          <th>ملاحظات</th>
        </tr>
        @foreach ($employee->salary as $salary)
          <tr>
            <td>{{$salary->month}}</td>
            <td>{{$salary->incentive}}</td>
            <td>{{$salary->allowance}}</td>
            <td>{{$salary->absence}}</td>
            <td>{{$salary->deductions}}</td>
            <td>{{$salary->advance}}</td>
            <td>{{$salary->created_at}}</td>
            <td>{{$salary->total}}</td>
            <td>{{$salary->notes}}</td>
          </tr>
        @endforeach

      </tbody>
      <tfoot>
        <tr>
          <td colspan="12">
            <div class="col-md-2" style="float:left;">
              <form class="" action="/salary/add" method="get">
                {{ csrf_field() }}
                <button type="submit" class="btn-lg btn-primary">شهر جديد</button>
              </form>
            </div>
          </td>
        </tr>
      </tfoot>
    </table>
    </div>
    <!-- /.box-body -->
  </div>

</div>
@endsection
