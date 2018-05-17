
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3>الأعمال</h3>

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
                   @foreach ($works as $work)
										<tr >
                    <td><a href="partner/{{$work->id}}">{{$work->items->name}}</a></td>
                    <td><a href="partner/{{$work->id}}">{{$work->lands->name}}</a></td>
                    <td><a href="partner/{{$work->id}}">{{$work->contractors->name}}</a></td>
										<td><a href="partner/{{$work->id}}">{{$work->metres}}</a></td>
										<td><a href="partner/{{$work->id}}">{{$work->single_cost}}</a></td>
										<td><a href="partner/{{$work->id}}">{{$work->total_cost}}</a></td>

									</tr>

								@endforeach
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
