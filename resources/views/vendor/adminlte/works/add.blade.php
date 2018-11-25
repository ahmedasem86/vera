
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
             <h3 class="box-title">إضافة اعمال</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" method="get" action="/works/store">
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
								 <label>المقاول</label>
								 <select name="contractor_id" class="form-control">
									 @foreach ($contractors as $contractor)
										 <option value="{{$contractor->id}}">{{$contractor->name}}</option>
									 @endforeach
								 </select>
							 </div>
							 <div class="form-group">
									 <label>البند</label>
									 <select name="item_id" class="form-control">
										 @foreach ($items as $item)
											 <option value="{{$item->id}}">{{$item->name}}</option>
										 @endforeach
									 </select>
								 </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">الأمتار المنفذه </label>
                     <input type="number" name="metres" class="form-control" id="exampleInputEmail1" placeholder="الأمتار">
                   </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">سعر المتر </label>
										 <input type="number" name="single_cost" class="form-control" id="exampleInputEmail1" placeholder="سعر المتر ">
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
