
@extends('adminlte::layouts.app')


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">

			@if($errors->all())
				<div class="alert alert-danger">
				 @foreach ($errors->all() as $error)
					 <ul>
						<li>{{ $error }}</li>
					 </ul>
					@endforeach
					</div>
				@endif
			<div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <!-- general form elements -->
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title col-md-6" >تسليم راتب {{$employee->name}}</h3>
						 <h3 class="box-title">الراتب الاساسي {{$employee->fixed_salary}}</h3>

           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" method="post" action="/salary/store" enctype="multipart/form-data">
						 {{ csrf_field() }}
						 <input type="number" name="fixed_salary" class="form-control hidden" id="exampleInputEmail1" value="{{$employee->fixed_salary}}">
						 <input type="number" name="employee_id" class="form-control hidden" id="exampleInputEmail1" value="{{$employee->id}}">

									 <div class="form-group">
											 <label for="exampleFormControlSelect1">قبض شهر</label>
											 <select  name="month" class="form-control" id="exampleFormControlSelect1">
												 	<option value="1">يناير</option>
												 	<option value="2">فبراير</option>
											 		<option value="3">مارس</option>
												  <option value="4">ابريل</option>
												 	<option value="5">مايو</option>
												  <option value="6">يونيه</option>
												 	<option value="7">يوليو</option>
												  <option value="8">آغسطس</option>
												 	<option value="9">سبتمبر</option>
											  	<option value="10">اكتوبر</option>
												 	<option value="11">نوفمبر</option>
											  	<option value="12">ديسمبر</option>
											 </select>
									 </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">المكافأة</label>
                     <input type="number" name="incentive" value="0" class="form-control" id="exampleInputEmail1" placeholder="المكافأة">
                   </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">بدل انتقالات</label>
										 <input type="number" name="allowance"  value="0" class="form-control" id="exampleInputEmail1" placeholder="بدل انتقالات">
									 </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">غيابات</label>
										 <input type="number" name="absence" value="0" class="form-control" id="exampleInputEmail1" placeholder="غيابات">
									 </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">سلف</label>
										 <input type="number" name="advance"  value="0" class="form-control" id="exampleInputEmail1" placeholder="سلف">
									 </div>
									 <div class="form-group">
										<label for="exampleInputEmail1">خصومات</label>
										<input type="number" name="deductions" step="0.01" value="0" class="form-control" id="exampleInputEmail1" placeholder="خصومات">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">ملاحظات</label>
										<textarea name="notes"  class="form-control" id="exampleInputEmail1" placeholder="ملاحظات" ></textarea>
									</div>

             <div class="box-footer">
               <button type="submit" class="btn btn-primary">إضافة</button>
             </div>
           </form>
         </div>
			</div>
		</div>
	</div>
@endsection
{{--
<form action="/upload" method="post" enctype="multipart/form-data">
    Product name:
    <br />
    <input type="text" name="name" />
    <br /><br />
    Product photos (can attach more than one):
    <br />
    <input type="file" name="photos[]" multiple />
    <br /><br />
    <input type="submit" value="Upload" />
</form> --}}
