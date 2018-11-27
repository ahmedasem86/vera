
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3> عملاء شركة النظافة</h3>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="text-center">
              <td>اسم العميل</td>
              <td>العنوان</td>
              <td>تاريخ التعاقد</td>
							<td>انتهاء التعاقد</td>

            </tr>
          </thead>
          <tbody>
                   @foreach ($clients as $client)
										<tr>
                    <td><a href="cclient/{{$client->id}}">{{$client->name}}</a></td>
                    <td><a href="cclient/{{$client->id}}">{{$client->address}}</a></td>
                    <td><a href="cclient/{{$client->id}}">{{$client->contract_date}}</a></td>
										<td><a href="cclient/{{$client->id}}">{{$client->end_date}}</a></td>
									</tr>

								@endforeach
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
