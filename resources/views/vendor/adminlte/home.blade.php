
@extends('adminlte::layouts.app')


@section('main-content')

	@section('main-content')
		<div class="container-fluid spark-screen">

			<div class="row">
		{{-- <div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">CPU Traffic</span>
					<span class="info-box-number">90<small>%</small></span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Likes</span>
					<span class="info-box-number">41,410</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col --> --}}

		<!-- fix for small devices only -->
		<div class="clearfix visible-sm-block"></div>


		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">عدد الموظفين</span>
					<span class="info-box-number">{{count($employee)}}</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- /.col -->
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="ion ion-ios-briefcase"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">عدد العملاء</span>
					<span class="info-box-number">{{count($clients)}}</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>

		</div>
			<!-- /.box -->


			<div class="row">

					<!-- Default box -->
					<div class="box col-md-5">
						<div class="box-header with-border">
							<h3 class="box-title">أقساط مستحقة</h3>

							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
									<i class="fa fa-minus"></i></button>
								<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
									<i class="fa fa-times"></i></button>
							</div>
						</div>
						<div class="box-body">
							<div class="table-responsive">
								@if ($installements_due->count() > 0)
								<table class="table no-margin">
									<thead>
									<tr>
										<th>الاسم</th>
										<th>التنبيه</th>
										<th>التاريخ</th>
									</tr>
									</thead>
									<tbody>
											@foreach ($installements_due as $installement)
												<tr>
													<td>{{$installement->unit->client->name}}</td>
													<td><span class="label label-success">قسط مقبول الدفع</span></td>
													<td><span class="sparkbar" data-color="#00a65a" data-height="20">{{$installement->due_date}}</span>
													</td>
												</tr>
											@endforeach
										@else
											<tr>
												<td>لا يوجد اقساط مستحقة غير مدفوعة</td>
											</tr>
										@endif
									</tbody>
								</table>
							</div>
						</div>
						<!-- /.box-body -->
						{{-- <div class="box-footer clearfix">
							<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">اظهر جميع التنبيهات</a>
						</div> --}}
					</div>

					<!-- Default box -->
					<div class="box col-md-offset-1 col-md-5">
						<div class="box-header with-border">
							<h3 class="box-title">أقتراب قسط</h3>

							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
									<i class="fa fa-minus"></i></button>
								<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
									<i class="fa fa-times"></i></button>
							</div>
						</div>
						<div class="box-body">
							<div class="table-responsive">
								@if ($installements_coming->count() > 0)
								<table class="table no-margin">
									<thead>
									<tr>
										<th>الاسم</th>
										<th>التنبيه</th>
										<th>التاريخ</th>
									</tr>
									</thead>
									<tbody>
											@foreach ($installements_coming as $installement)
												<tr>
													<td>{{$installement->unit->client->name}}</td>
													<td><span class="label label-success">قسط مقبول الدفع</span></td>
													<td><span class="sparkbar" data-color="#00a65a" data-height="20">{{$installement->due_date}}</span>
													</td>
												</tr>
											@endforeach
										@else
											<tr>
												<td colspan="3"> لا يوجد اقساط واجبة الاستحقاق خلال الشهر القادم</td>
											</tr>
										@endif

									</tbody>
								</table>
							</div>
						</div>
						<!-- /.box-body -->
						{{-- <div class="box-footer clearfix">
							<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">اظهر جميع التنبيهات</a>
						</div> --}}
					</div>


			</div>
		</div>
@endsection
