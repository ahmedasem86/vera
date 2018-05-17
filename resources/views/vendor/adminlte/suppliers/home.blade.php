
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3>الموردون</h3>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="text-center">
              <td>اسم المورد</td>
              <td>عنوان المورد</td>
              <td>الرقم القومي للمورد </td>
              <td>رقم المحمول </td>

            </tr>
          </thead>
          <tbody>
                   @foreach ($suppliers as $supplier)
										<tr >
                    <td><a href="/{{$supplier->id}}">{{$supplier->name}}</a></td>
                    <td><a href="supplier/{{$supplier->id}}">{{$supplier->address}}</a></td>
                    <td><a href="supplier/{{$supplier->id}}">{{$supplier->supplier_id_no}}</a></td>
                    <td><a href="supplier/{{$supplier->id}}">{{$supplier->mobile_no}}</a></td>
									</tr>

                  @endforeach 
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
