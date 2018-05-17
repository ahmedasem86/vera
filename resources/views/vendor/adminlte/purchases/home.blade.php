
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3>المشتريات </h3>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="text-center">
              <td>اسم الصنف</td>
              <td>اسم المنشأ</td>
              <td>اسم المورد</td>
              <td>الكميه </td>
              <td>سعر الوحده </td>
              <td>التكلفه الأجمالية</td>
            </tr>
          </thead>
          <tbody>
                    @foreach ($purchases as $Purchase)
										<tr >
                    <td><a href="Purchase/{{$Purchase->id}}">{{$Purchase->materials->name}}</a></td>
                    <td><a href="Purchase/{{$Purchase->id}}">{{$Purchase->lands->name}}</a></td>
                    <td><a href="Purchase/{{$Purchase->id}}">{{$Purchase->suppliers->name}}</a></td>
										<td><a href="Purchase/{{$Purchase->id}}">{{$Purchase->quantity}}</a></td>
										<td><a href="Purchase/{{$Purchase->id}}">{{$Purchase->single_cost}}</a></td>
										<td><a href="Purchase/{{$Purchase->id}}">{{$Purchase->total_cost}}</a></td>
									</tr>

								@endforeach
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
