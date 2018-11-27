
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3>خامات لوازم شركة النظافه</h3>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="text-center">
              <td>اسم المنتج</td>
              <td>الوحده</td>
              <td>ملاحظات</td>
            </tr>
          </thead>
          <tbody>
                   @foreach ($materials as $material)
										<tr>
                    <td><a href="cmaterial/{{$material->id}}">{{$material->name}}</a></td>
                    <td><a href="cmaterial/{{$material->id}}">{{$material->unit}}</a></td>
                    <td><a href="cmaterial/{{$material->id}}">{{$material->notes}}</a></td>
									</tr>

								@endforeach
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
