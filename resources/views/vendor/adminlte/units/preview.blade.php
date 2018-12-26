
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <div class="panel panel-warning">
          <div class="panel-heading">
            <h4 class="box-title">عمليه بيع الوحده رقم  {{$unit->flat_no}} بالدور رقم {{$unit->floor_no}} عمارة  {{$unit->lands->name}}</h4>
          </div>
          <div class="panel-body">
            <div class="col-md-4">
              <h5>اسم المشتري : {{$client->name}}</h5>
              <h5>السعر المتفق عليه : {{$sale_price}}</h5>
              <h5>موعد اول قسط : {{$installements[0]['date']}}</h5>
              <h5>موعد اخر قسط : {{$last_installement['date']}}</h5>
            </div>
          <div class="col-md-4">
            <h5>الرقم القومي للمشتري : {{$client->client_id_no}}</h5>
            <h5>المقدم المتفق عليه : {{$advance}}</h5>
            <h5>عدد الاقساط : {{$no_of_installements}}</h5>
            <h5>قيمة القسط : {{$installement_cost}}</h5>
          </div>
          <div class="col-md-4">
            <form role="form" method="post" action="/unitsale/store/{{$unit->id}}">
              {{ csrf_field() }}
                      <input type="number" min="0" name="sale_price" value="{{$sale_price}}" class="hidden form-control" >
                      <input type="number" name="advance"  class="hidden form-control" value="{{$advance}}">
                      <input type="number" name="installement_interval" class="hidden form-control" value="{{$installement_interval}}" >
                      <input type="number" name="no_of_installements" class="hidden form-control" value="{{$no_of_installements}}" >
                     <input type="text" name="sale_notes" class="hidden form-control" value="{{$no_of_installements}}" >
                     <input type="text" name="sale_notes" class="hidden form-control" value="{{$notes}}" >
                     <input type="text" name="client_id" class="hidden form-control" value="{{$client->id}}" >

              <button type="submit" class="btn btn-warning">تاكيد البيع والتسجيل</button>
            </form>
          </div>
          <table class="table text-center">
            <thead>
              <tr class="text-center" style="font-size: medium;font-weight: bold;">
                <td>رقم القسط</td>
                <td>تاريخ الاستحقاق</td>
                <td>قيمة القسط</td>
              </tr>
            </thead>
            <tbody>
                     @foreach ($installements as $installment)
  										<tr >
                      <td>{{$installment['id']+1}}</a></td>
                      <td>{{$installment['date']}}</a></td>
                      <td>{{$installment['cost']}}</a></td>
    									</tr>
  								@endforeach
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
		</div>
	</div>
@endsection
