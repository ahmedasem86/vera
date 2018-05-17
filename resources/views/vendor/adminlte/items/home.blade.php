
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3>البنود </h3>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="text-center">
              <td>اسم البند</td>
              <td>الملحوظات</td>
            </tr>
          </thead>
          <tbody>
                  @foreach ($items as $item)
										<tr >
                    <td><a href="/{{$item->id}}">{{$item->name}}</a></td>
                    <td><a href="items/{{$item->id}}">{{$item->notes}}</a></td>
									</tr>

                  @endforeach
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
