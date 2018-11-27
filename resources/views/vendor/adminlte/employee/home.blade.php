
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
							<td>قبض</td>

            </tr>
          </thead>
          <tbody>
                   @foreach ($employees as $employee)
										<tr>
                    <td><a href="employee/{{$employee->id}}">{{$employee->name}}</a></td>
                    <td><a href="employee/{{$employee->id}}">{{$employee->id_no}}</a></td>
                    <td><a href="employee/{{$employee->id}}">{{$employee->address}}</a></td>
										<td><a href="employee/{{$employee->id}}">{{$employee->mobile_no}}</a></td>
										<td>
												<form class="" action="/salary/add/{{$employee->id}}" method="get">
													{{ csrf_field() }}
													<button type="submit" class="btn-lg btn-primary">شهر جديد</button>
												</form>
										</td>

									</tr>

								@endforeach
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
