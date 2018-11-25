
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
           <form role="form" method="post" action="/unit/store" enctype="multipart/form-data">
						 {{ csrf_field() }}
             <input type="number" name="land_id" class="form-control hidden" value="{{$land->id}}" id="exampleInputEmail1">
                   <div class="form-group">
                     <label for="exampleInputEmail1">رقم الوحدة</label>
                     <input type="number" min="0" name="flat_no" class="form-control" id="exampleInputEmail1" placeholder="رقم الوحدة">
                   </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">الدور</label>
										 <input type="number" name="floor_no"  class="form-control" id="exampleInputEmail1" placeholder="الدور">
									 </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">مساحة الوحدة</label>
										 <input type="number" name="area" class="form-control" id="exampleInputEmail1" placeholder="المساحة بالمتر المربع">
									 </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">وصف الوحده</label>
										 <textarea name="description"  class="form-control" id="exampleInputEmail1" placeholder="وصف الوحدة"></textarea>
									 </div>
									 <div class="form-group">
										<label for="exampleInputEmail1">سعر الوحدة</label>
										<input type="number" name="price" class="form-control" id="exampleInputEmail1" placeholder="سعر الوحدة">
									</div>
									<div class="form-group">
										<label>نوع الوحدة</label>
										<select name="unit_type" class="form-control">
												<option value="0">شقه</option>
												<option value="1">محل</option>
										</select>
									</div>
									<div class="form-group">
										<label>صور الوحده</label>
										<input type="file" name="photos[]" multiple />

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
