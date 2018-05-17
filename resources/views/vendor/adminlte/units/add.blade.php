
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
             <h3 class="box-title">أضف وحدة الى {{$land->name}}</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" method="get" action="/unit/store">
             <input type="number" name="land_id" class="form-control hidden" value="{{$land->id}}" id="exampleInputEmail1">
                   <div class="form-group">
                     <label for="exampleInputEmail1">رقم الوحدة</label>
                     <input type="number" name="flat_no" class="form-control" id="exampleInputEmail1" placeholder="حصة الأرض">
                   </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">الدور</label>
										 <input type="number" name="floor_no" class="form-control" id="exampleInputEmail1" placeholder="حصة الأرض">
									 </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">مساحة الوحدة</label>
										 <input type="number" name="area" class="form-control" id="exampleInputEmail1" placeholder="حصة الأرض">
									 </div>
									 <div class="form-group">
										<label for="exampleInputEmail1">سعر الوحدة</label>
										<input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="حصة الأرض">
									</div>
									<div class="form-group">
										<label>نوع الوحدة</label>
										<select name="unit_type" class="form-control">
												<option value="0">شقه</option>
												<option value="1">محل</option>
										</select>
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
