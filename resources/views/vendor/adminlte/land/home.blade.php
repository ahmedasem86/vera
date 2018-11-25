
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3>الأراضي</h3>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="text-center">
              <td>اسم القطعة</td>
              <td>عنوان القطعة</td>
              <td>تاريخ التعاقد</td>
              <td>تاريخ التسليم</td>
            </tr>
          </thead>
          <tbody>

                  @foreach ($lands as $land)
										<tr >
                    <td><a href="land/{{$land->id}}">{{$land->name}}</a></td>
                    <td><a href="land/{{$land->id}}">{{$land->address}}</a></td>
                    <td><a href="land/{{$land->id}}">{{$land->contract_date}}</a></td>
                    <td><a href="land/{{$land->id}}">{{$land->delivery_date}}</a></td>
									</tr>

                  @endforeach
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
