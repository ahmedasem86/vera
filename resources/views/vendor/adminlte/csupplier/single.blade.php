
@extends('adminlte::layouts.app')


@section('main-content')

<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> {{$supplier->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                  <tr>
                  <th> العنوان </th>
                  <td><b>{{$supplier->address}}</b></td>
                </tr>
                <tr>
                  <th>الرقم القومي</th>
                  <td> {{$supplier->supplier_id_no}} </td>
                </tr>
                <tr>
                  <th>رقم الهاتف</th>
                  <td> {{$supplier->mobile_no}}</td>
                </tr>


              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>

</div>
@endsection
