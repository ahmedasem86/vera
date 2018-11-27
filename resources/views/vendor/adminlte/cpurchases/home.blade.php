
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3>مشتريات شركة النظافة</h3>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="text-center">
              <td>اسم المورد</td>
              <td>المنتج</td>
              <td>العميل</td>
							<td>الكميه</td>
							<td>تكلفة الوحده</td>
							<td>التكلفة الكليه</td>
							<td>الملاحظات</td>

            </tr>
          </thead>
          <tbody>

                   @foreach ($purchases as $purchase)
										<tr>
                    <td><a href="cpurchase/{{$purchase->id}}">{{$purchase->supplier->name}}</a></td>
                    <td><a href="cpurchase/{{$purchase->id}}">{{$purchase->material->name}}</a></td>
                    <td><a href="cpurchase/{{$purchase->id}}">{{$purchase->client->name}}</a></td>
										<td><a href="cpurchase/{{$purchase->id}}">{{$purchase->quantity}}</a></td>
										<td><a href="cpurchase/{{$purchase->id}}">{{$purchase->single_cost}}</a></td>
										<td><a href="cpurchase/{{$purchase->id}}">{{$purchase->total_cost}}</a></td>
										<td><a href="cpurchase/{{$purchase->id}}">{{$purchase->notes}}</a></td>
									</tr>

								@endforeach
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
