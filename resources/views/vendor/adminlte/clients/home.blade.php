
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3>العملاء</h3>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="text-center">
              <td>اسم العميل</td>
              <td>عنوان العميل</td>
              <td>الرقم القومي للعميل</td>
              <td>رقم المحمول </td>

            </tr>
          </thead>
          <tbody>
                  @foreach ($clients as $client)
										<tr >
                    <td><a href="client/{{$client->id}}">{{$client->name}}</a></td>
                    <td><a href="client/{{$client->id}}">{{$client->address}}</a></td>
                    <td><a href="client/{{$client->id}}">{{$client->client_id_no}}</a></td>
                    <td><a href="client/{{$client->id}}">{{$client->mobile_no}}</a></td>

									</tr>

                  @endforeach
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
