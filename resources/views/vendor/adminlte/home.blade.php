
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
					<span class="info-box-number">١١٥</span>
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
					<span class="info-box-number">760</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>

		</div>
			<!-- /.box -->


			<div class="row">

					<!-- Default box -->
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">تنبيهات</h3>

							<div class="box-tools pull-right">
								<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
									<i class="fa fa-minus"></i></button>
								<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
									<i class="fa fa-times"></i></button>
							</div>
						</div>
						<div class="box-body">
							<div class="table-responsive">
								<table class="table no-margin">
									<thead>
									<tr>
										<th>الاسم</th>
										<th>التنبيه</th>
										<th>التاريخ</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>احمد محمد</td>
										<td><span class="label label-success">قسط مقبول الدفع</span></td>
										<td>
											<div class="sparkbar" data-color="#00a65a" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>٢٧-١٠-٢٠١٨</div>
										</td>
									</tr>
									<tr>
										<td>محمود عزت</td>
										<td><span class="label label-warning">قسط متآخر</span></td>
										<td>
											<div class="sparkbar" data-color="#f39c12" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>٢٧-١٠-٢٠١٨</div>
										</td>
									</tr>
									<tr>
										<td>رامي دياب</td>
										<td><span class="label label-danger">قسط مديونيه</span></td>
										<td>
											<div class="sparkbar" data-color="#f56954" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>٢٧-١٠-٢٠١٨</div>
										</td>
									</tr>
									<tr>
										<td>ناديه محمود</td>
										<td><span class="label label-info">اقتراب قسط مديونيه</span></td>
										<td>
											<div class="sparkbar" data-color="#00c0ef" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>٢٧-١٠-٢٠١٨</div>
										</td>
									</tr>
									<tr>
										<td>عامر خالد</td>
										<td><span class="label label-warning">قسط متآخر</span></td>
										<td>
											<div class="sparkbar" data-color="#f39c12" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>٢٧-١٠-٢٠١٨</div>
										</td>
									</tr>
									<tr>
										<td>ياسر احمد</td>
										<td><span class="label label-danger">قسط مديونيه</span></td>
										<td>
											<div class="sparkbar" data-color="#f56954" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>٢٧-١٠-٢٠١٨</div>
										</td>
									</tr>
									<tr>
										<td>مهند زياد</td>
										<td><span class="label label-success">قسط مقبول الدفع</span></td>
										<td>
											<div class="sparkbar" data-color="#00a65a" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas>٢٧-١٠-٢٠١٨</div>
										</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer clearfix">
							<a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">اظهر جميع التنبيهات</a>
						</div>
					</div>


			</div>
		</div>
@endsection
