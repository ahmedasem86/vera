
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3>{{$land->name}}</h3>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-striped text-center">
          <thead>
            <tr class="text-center">
              <td>{{ trans('adminlte_lang::land.landname') }}</td>
              <td>{{ trans('adminlte_lang::land.landaddress') }}</td>
            </tr>
          </thead>
          <tbody>
                <tr >
                  <td>{{$land->name}}</td>
                  <td>{{$land->address}}</td>
                </tr>
          </tbody>
        <thead>
          <tr class="text-center">
            <td>{{ trans('adminlte_lang::land.area') }}</td>
            <td>{{ trans('adminlte_lang::land.type') }}</td>
          </tr>
        </thead>
        <tbody>
              <tr>
                <td>{{$land->area}}</td>
                <td>{{$land->type}}</td>
              </tr>
        </tbody>
        <thead>
          <tr class="text-center">
            <td>{{ trans('adminlte_lang::land.price') }}</td>
            <td>{{ trans('adminlte_lang::land.predicted_cost') }}</td>
          </tr>
        </thead>
        <tbody>
              <tr>
                <td>{{$land->price}}</td>
                <td>{{$land->predicted_cost}}</td>
              </tr>
        </tbody>
        <thead>
          <tr class="text-center">
            <td>{{ trans('adminlte_lang::land.contract_date') }}</td>
            <td>{{ trans('adminlte_lang::land.delivery_date') }}</td>
          </tr>
        </thead>
        <tbody>
              <tr>
                <td>{{$land->contract_date}}</td>
                <td>{{$land->delivery_date}}</td>
              </tr>
        </tbody>
      </table>
      </div>
    </div>
		</div>
	</div>
@endsection
