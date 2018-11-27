
@extends('adminlte::layouts.app')


@section('main-content')

<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> {{$material->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                  <tr>
                  <th> الوحده</th>
                  <td><b>{{$material->unit}}</b></td>
                </tr>
                <tr>
                  <th>ملحوظات</th>
                  <td> {{$material->notes}} </td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>

</div>
@endsection
