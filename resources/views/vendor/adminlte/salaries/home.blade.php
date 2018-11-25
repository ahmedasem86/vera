
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3>موظفون شركة النظافه</h3>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="text-center">
              <td>اسم الموظف</td>
              <td>الرقم القومي</td>
              <td>العنوان</td>
              <td>رقم الموبيل</td>
            </tr>
          </thead>
          <tbody>
                   @foreach ($salaries as $salary)
										<tr>
                    <td><a href="salary/{{$salary->id}}">{{$salary->name}}</a></td>
                    <td><a href="salary/{{$salary->id}}">{{$salary->id_no}}</a></td>
                    <td><a href="salary/{{$salary->id}}">{{$salary->address}}</a></td>
										<td><a href="salary/{{$salary->id}}">{{$salary->mobile_no}}</a></td>
									</tr>

								@endforeach
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
