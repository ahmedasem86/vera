
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
             <h3 class="box-title">مقاول جديد</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" method="get" action="/contractor/store">
             <div class="box-body">
               <div class="form-group">
                 <label for="exampleInputEmail1">اسم القطعة</label>
                 <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="اسم القطعة">
               </div>

                   <div class="form-group">
                     <label for="exampleInputEmail1">عنوان القطعة</label>
                     <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="عنوان القطعة">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">الرقم القومي</label>
                     <input type="number" name="contractor_id" class="form-control" id="exampleInputEmail1" placeholder="الرقم القومي">
                   </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">رقم الموبيل</label>
										 <input type="number" name="mobile_no" class="form-control" id="exampleInputEmail1" placeholder="رقم الموبيل">
									 </div>
             <div class="box-footer">
               <button type="submit" class="btn btn-primary">{{ trans('adminlte_lang::land.add') }}</button>
             </div>
           </form>
         </div>
			</div>
		</div>
	</div>

@endsection
