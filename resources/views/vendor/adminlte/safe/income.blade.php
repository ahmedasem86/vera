@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
				<form class="" action="/safe/income" method="get">
					<h4>تصفية الايرادات </h4>
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
									@if (!empty($payments))
                  @foreach ($payments as $payment)
										<tr >
										<td class="col-md-1"><a href="/unit/{{$payment->installement->unit->id}}">{{$i}}</a></td>
                    <td><a href="/unit/{{$payment->installement->unit->id}}">دفعة قسط - من وحده رقم - {{$payment->installement->unit->flat_no}} - {{$payment->installement->unit->lands->name}}</a></td>
                    <td><a href="/unit/{{$payment->installement->unit->id}}">{{$payment->payed}}</a></td>
                    <td><a href="/unit/{{$payment->installement->unit->id}}">{{$payment->created_at}}</a></td>
									</tr>
									@php
									$total +=$payment->payed ;
									$i++ ;
									@endphp
                  @endforeach
									@endif
									@if (!empty($cheques))
									@foreach ($cheques as $cheque)
										<tr >
										<td class="col-md-1"><a href="/cclient/{{$cheque->cclient->id}}">{{$i}}</a></td>
                    <td><a href="/cclient/{{$cheque->cclient->id}}">شيك من - {{$cheque->cclient->name}}</a></td>
                    <td><a href="/cclient/{{$cheque->cclient->id}}">{{$cheque->value}}</a></td>
                    <td><a href="/cclient/{{$cheque->cclient->id}}">{{$cheque->created_at}}</a></td>
									</tr>
									@php
									$total += $cheque->value	;
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
