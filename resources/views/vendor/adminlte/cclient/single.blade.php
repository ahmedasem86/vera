
@extends('adminlte::layouts.app')


@section('main-content')

<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> {{$client->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                  <tr>
                  <th> العنوان </th>
                  <td><b>{{$client->address}}</b></td>
                </tr>
                <tr>
                  <th>تاريخ التعاقد</th>
                  <td> {{$client->contract_date}} </td>
                </tr>
                <tr>
                  <th>انتهاء التعاقد</th>
                  <td> {{$client->end_date}}</td>
                </tr>
            

              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>

</div>
@endsection
