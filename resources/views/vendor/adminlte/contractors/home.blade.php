
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3>المقاولون</h3>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="text-center">
              <td>اسم المقاول</td>
              <td>عنوان المقاول</td>
              <td>الرقم القومي للمقاول </td>
              <td>رقم المحمول </td>

            </tr>
          </thead>
          <tbody>
                  @foreach ($contractors as $contractor)
										<tr >
                    <td><a href="/{{$contractor->id}}">{{$contractor->name}}</a></td>
                    <td><a href="contractor/{{$contractor->id}}">{{$contractor->address}}</a></td>
                    <td><a href="contractor/{{$contractor->id}}">{{$contractor->contractor_id}}</a></td>
                    <td><a href="contractor/{{$contractor->id}}">{{$contractor->mobile_no}}</a></td>

									</tr>

                  @endforeach
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
