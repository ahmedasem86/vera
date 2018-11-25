
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
             <h3 class="box-title">إضافة مشتريات</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" method="get" action="/purchase/store">
             <div class="box-body">
							 <div class="form-group">
								 <label>المنشأ</label>
								 <select name="land_id" class="form-control">
									 @foreach ($lands as $land)
										 <option value="{{$land->id}}">{{$land->name}}</option>
									 @endforeach
								 </select>
							 </div>
							 <div class="form-group">
								 <label>المورد </label>
								 <select name="supplier_id" class="form-control">
									 @foreach ($suppliers as $supplier)
										 <option value="{{$supplier->id}}">{{$supplier->name}}</option>
									 @endforeach
								 </select>
							 </div>
							 <div class="form-group">
									 <label>الصنف</label>
									 <select name="material_id" class="form-control">
										 @foreach ($materials as $material)
											 <option value="{{$material->id}}">{{$material->name}}</option>
										 @endforeach
									 </select>
								 </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">الكمية</label>
                     <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" placeholder="الكمية">
                   </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">سعر الوحدة</label>
										 <input type="number" name="single_cost" class="form-control" id="exampleInputEmail1" placeholder="سعر الوحدة">
									 </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">تفاصيل وملحوظات</label>
										 <textarea name="notes" class="form-control" id="exampleInputEmail1" placeholder="ملحوظات"></textarea>
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
