
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
             <h3 class="box-title">اضف موظف</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" method="post" action="/employee/store" enctype="multipart/form-data">
						 {{ csrf_field() }}

                   <div class="form-group">
                     <label for="exampleInputEmail1">اسم الموظف</label>
                     <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="اسم الموظف">
                   </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">الرقم القومي</label>
										 <input type="text" name="id_no"  class="form-control" id="exampleInputEmail1" placeholder="الرقم القومي">
									 </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">العنوان</label>
										 <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="العنوان">
									 </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">رقم المحمول</label>
										 <input type="text" name="mobile_no"  class="form-control" id="exampleInputEmail1" placeholder="رقم المحمول">
									 </div>
									 <div class="form-group">
										<label for="exampleInputEmail1">المرتب الاساسي</label>
										<input type="number" name="fixed_salary" step="0.01" class="form-control" id="exampleInputEmail1" placeholder="المرتب الاساسي" required>
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
