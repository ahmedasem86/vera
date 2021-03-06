
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
			<div >
				<h2 style="color:#3c8dbc;">{{$land->name}}</h2>
			</div>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-striped text-center">
          <thead>
            <tr class="text-center">
              <td>{{ trans('adminlte_lang::land.landname') }}</td>
              <td>{{ trans('adminlte_lang::land.landaddress') }}</td>
            </tr>
          </thead>
          <tbody>
                <tr >
                  <td>{{$land->name}}</td>
                  <td>{{$land->address}}</td>
                </tr>
          </tbody>
        <thead>
          <tr class="text-center">
            <td>{{ trans('adminlte_lang::land.area') }}</td>
            <td>{{ trans('adminlte_lang::land.type') }}</td>
          </tr>
        </thead>
        <tbody>
              <tr>
                <td>{{$land->area}}</td>
                <td>{{$land->type}}</td>
              </tr>
        </tbody>
        <thead>
          <tr class="text-center">
            <td>{{ trans('adminlte_lang::land.price') }}</td>
            <td>{{ trans('adminlte_lang::land.predicted_cost') }}</td>
          </tr>
        </thead>
        <tbody>
              <tr>
                <td>{{$land->price}}</td>
                <td>{{$land->predicted_cost}}</td>
              </tr>
        </tbody>
        <thead>
          <tr class="text-center">
            <td>{{ trans('adminlte_lang::land.contract_date') }}</td>
            <td>{{ trans('adminlte_lang::land.delivery_date') }}</td>
          </tr>
        </thead>
        <tbody>
              <tr>
                <td>{{$land->contract_date}}</td>
                <td>{{$land->delivery_date}}</td>
              </tr>
        </tbody>
      </table>
      </div>
    </div>

		<div style="margin-top:15px;">
			<div class="col-md-9">
				<h2 style="color:#3c8dbc;">الشركاء</h2>
			</div>
			<div class="col-md-3">
				<form class="" action="/addpartner/{{$land->id}}" method="get">
					{{ csrf_field() }}
					<button type="submit" class="btn-lg btn-primary">إضافة شريك</button>
				</form>
			</div>
		</div>
		<div class="row">
      <div class="col-md-12 " style="background-color:white; padding-top:10px;">

        <table class="table table-striped text-center">
          <thead>
            <tr class="text-center">
              <td>الأسم</td>
              <td>نسبة الأرض</td>
							<td>نسبة البناء</td>
							<td>النسبة الكلية</td>
            </tr>

          </thead>
          <tbody>
						@php
							$total_land_percentage = 0 ;
							$total_construction_percentage = 0 ;
							$total_partners_percentage = 0 ;
						@endphp
						@foreach ($land->partners as $partner)
							@php
								$total_land_percentage += $partner->pivot->land_percentage ;
								$total_construction_percentage += $partner->pivot->construction_percentage ;
								$total_partners_percentage += $partner->pivot->total_percentage;
							@endphp
							<tr class="text-center">
	              <td>{{$partner->name}}</td>
	              <td>{{$partner->pivot->land_percentage}}%</td>
								<td>{{$partner->pivot->construction_percentage}}%</td>
								<td>{{$partner->pivot->total_percentage}}%</td>
	            </tr>
						@endforeach
							<tfoot style="background-color:#3c8dbc; color:white;">
								<td>الإجمالي</td>
								<td>{{$total_land_percentage}}%</td>
								<td>{{$total_construction_percentage}}%</td>
								<td>{{$total_partners_percentage}}%</td>

							</tfoot>
          </tbody>

      </table>
      </div>
    </div>
		<!-- units-->
		<br><br><br>
		<div style="margin-top:15px;">
			<div class="col-md-9">
				<h2 style="color:#3c8dbc;">الوحدات </h2>
			</div>
			<div class="col-md-3">
				<form  action="/addunit/{{$land->id}}" method="get">
					{{ csrf_field() }}
					<button type="submit" class="btn-lg btn-primary">إضافة وحدة</button>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 " style="background-color:white; padding-top:10px;">
				<table class="table table-striped text-center">
					<thead>
						<tr class="text-center">
							<td>رقم الوحدة</td>
							<td>الدور</td>
							<td>نوع الوحده</td>
							<td>المساحه</td>
							<td>السعر</td>
						</tr>

					</thead>
					 <tbody>
						 @php
						 	$unit_type = ['شقه','محل'];

						 @endphp
						@foreach ($land->units as $unit)
							<tr class="text-center">
								<td>{{$unit->flat_no}}</td>
								<td>{{$unit->floor_no}}</td>
								<td>{{$unit_type[$unit->unit_type]}}</td>
								<td>{{$unit->area}}</td>
								<td>{{$unit->price}}</td>
							</tr>
						@endforeach
							{{-- <tfoot style="background-color:#3c8dbc; color:white;">
								<td>الإجمالي</td>


							</tfoot> --}}
					</tbody>

			</table>
			</div>
		</div>


		</div>
	</div>
@endsection
