
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
             <h3 class="box-title">صنف جديد</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" method="get" action="/material/store">
             <div class="box-body">
               <div class="form-group">
                 <label for="exampleInputEmail1">اسم البند</label>
                 <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="اسم الصنف">
               </div>
							 <div class="form-group">
								 <label for="exampleInputEmail1">الوحدة</label>
								 <input type="text" name="unit" class="form-control" id="exampleInputEmail1" placeholder="الوحدة">
							 </div>
							 <div class="form-group">
								 <label for="exampleInputEmail1">ملحوظات</label>
								 <input type="text" name="notes" class="form-control" id="exampleInputEmail1" placeholder="ملحوظات">
							 </div>
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
