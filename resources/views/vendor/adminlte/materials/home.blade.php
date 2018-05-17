
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3>سجل الخامات</h3>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="text-center">
              <td>اسم الصنف</td>
							<td>الوحده</td>
              <td>الملحوظات</td>
            </tr>
          </thead>
          <tbody>
                  @foreach ($materials as $material)
										<tr >
                    <td><a href="materials/{{$material->id}}">{{$material->name}}</a></td>
										<td><a href="materials/{{$material->id}}">{{$material->unit}}</a></td>
                    <td><a href="materials/{{$material->id}}">{{$material->notes}}</a></td>
									</tr>

                  @endforeach
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
