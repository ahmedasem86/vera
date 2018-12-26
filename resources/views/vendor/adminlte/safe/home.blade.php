
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
				<form class="" action="/safe/outcome" method="get">
					<h4>تصفية المصروفات  </h4>
					<div class="form-group col-md-2">
						<label for="section" class="pull-right" style="padding:5px;">قسم : </label>
						<select class="form-control col-md-7 " name="section">
							<option value="all">الكل</option>
							<option value="const">المقاولات</option>
							<option value="clean">النظافة</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for=" from date" class="pull-right" style="padding:5px;"> من تاريخ : </label>
						<input type="date" class="form-control col-md-9" name="from_date" value="<?= (!empty($from_date))?  $from_date :  date('Y-m-d'); ?>" />
					</div>
					<div class="form-group col-md-4">
						<label for=" from date" class="pull-right" style="padding:5px;">الي : </label>
						<input type="date" class="form-control col-md-9" name="to_date" value="<?= (!empty($to_date))?  $to_date :  date('Y-m-d', strtotime("+1 day")); ?>" />
					</div>
					<button type="submit" name="button"> تصفية</button>
				</form>
      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="text-center">
							<td>رقم العمليه</td>
              <td>القسم</td>
              <td>المبلغ</td>
              <td>التاريخ</td>
            </tr>
          </thead>
          <tbody>
									@php
										$i=1;
										$total = 0 ;
									@endphp
									@if (!empty($works))
                  @foreach ($works as $work)
										<tr >
										<td class="col-md-1"><a href="work/{{$work->id}}">{{$i}}</a></td>
                    <td><a href="work/{{$work->id}}">أعمال - {{$work->contractors->name}} - {{$work->items->name}} - {{$work->lands->name}}</a></td>
                    <td><a href="work/{{$work->id}}">{{$work->total_cost}}</a></td>
                    <td><a href="work/{{$work->id}}">{{$work->created_at}}</a></td>
									</tr>
									@php
									$total +=$work->total_cost ;
									$i++ ;
									@endphp
                  @endforeach
									@endif
									@if (!empty($purchases))
									@foreach ($purchases as $purchase)
										<tr >
										<td class="col-md-1"><a href="purchase/{{$purchase->id}}">{{$i}}</a></td>
                    <td><a href="purchase/{{$purchase->id}}">مشتريات  - {{$purchase->suppliers->name}} - {{$purchase->materials->name}} - {{$purchase->lands->name}}</a></td>
                    <td><a href="purchase/{{$purchase->id}}">{{$purchase->total_cost}}</a></td>
                    <td><a href="purchase/{{$purchase->id}}">{{$purchase->created_at}}</a></td>
									</tr>
									@php
									$total += $purchase->total_cost	;
									$i++ ;
									@endphp
									@endforeach
									@endif
									@if (!empty($salaries))
									@foreach ($salaries as $salary)
										<tr >
										<td class="col-md-1"><a href="employee/{{$salary->employee->id}}">{{$i}}</a></td>
										<td><a href="employee/{{$salary->employee->id}}">مرتب - {{$salary->month}} - {{$salary->employee->name}}</a></td>
										<td><a href="employee/{{$salary->employee->id}}">{{$salary->total}}</a></td>
										<td><a href="employee/{{$salary->employee->id}}">{{$salary->created_at}}</a></td>
									</tr>
									@php
									$total += $salary->total ;
									$i++ ;
									@endphp
									@endforeach
									@endif
									@if (!empty($cpurchases))
									@foreach ($cpurchases as $cpurchase)
										<tr >
										<td class="col-md-1"><a href="supplier/{{$cpurchase->supplier->id}}">{{$i}}</a></td>
										<td><a href="supplier/{{$cpurchase->supplier->id}}">فاتورة مشتريات من - {{$cpurchase->supplier->name}}</a></td>
										<td><a href="supplier/{{$cpurchase->supplier->id}}">{{$cpurchase->total_cost}}</a></td>
										<td><a href="supplier/{{$cpurchase->supplier->id}}">{{$cpurchase->created_at}}</a></td>
									</tr>
									@php
									$total += $cpurchase->total_cost ;
									$i++ ;
									@endphp
									@endforeach
									@endif
									<tr>
										<td> الاجمالي</td>
										<td colspan="3" class="text-center" style ="background-color:#605ca8; color:white;"> {{$total}}</td>
									</tr>
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
