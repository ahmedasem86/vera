
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3>وحدات</h3>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="text-center">
              <td>اسم البند</td>
              <td>اسم المنشأ</td>
              <td>اسم المقاول</td>
              <td>عدد الأمتار</td>
              <td>سعر المتر </td>
              <td>التكلفه الأجمالية</td>
            </tr>
          </thead>
          <tbody>
                   @foreach ($units as $unit)
										<tr >
                    <td><a href="partner/{{$unit->id}}">{{$unit->items->name}}</a></td>
                    <td><a href="partner/{{$unit->id}}">{{$unit->lands->name}}</a></td>
                    <td><a href="partner/{{$unit->id}}">{{$unit->contractors->name}}</a></td>
										<td><a href="partner/{{$unit->id}}">{{$unit->metres}}</a></td>
										<td><a href="partner/{{$unit->id}}">{{$unit->single_cost}}</a></td>
										<td><a href="partner/{{$unit->id}}">{{$unit->total_cost}}</a></td>

									</tr>

								@endforeach
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
