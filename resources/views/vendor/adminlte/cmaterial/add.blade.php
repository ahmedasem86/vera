
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
			<div class="col-md-6 " style="background-color:white; padding-top:10px;">
        <!-- general form elements -->
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">منتج جديد</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" method="post" action="/cmaterial/store" enctype="multipart/form-data">
						 {{ csrf_field() }}

                   <div class="form-group">
                     <label for="exampleInputEmail1">اسم المنتج</label>
                     <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="اسم المنتج">
                   </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">الوحده</label>
										 <input type="text" name="unit"  class="form-control" id="exampleInputEmail1" placeholder="الوحده">
									 </div>
									 <div class="form-group ">
										 <label for="exampleInputEmail1">ملاحظات</label>
										 <textarea name="notes" class="form-control" id="exampleInputEmail1" placeholder="ملاحظات"></textarea>
									 </div>
             <div class="box-footer col-md-12">
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
