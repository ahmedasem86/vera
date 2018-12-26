
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
             <h3 class="box-title">عمليه بيع الوحده رقم  {{$unit->flat_no}} بالدور رقم {{$unit->floor_no}} عمارة  {{$unit->lands->name}}</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" method="post" action="/unitsale/preview/{{$unit->id}}">
						 {{ csrf_field() }}
             <input type="number" name="land_id" class="form-control hidden" value="{{$unit->id}}" id="exampleInputEmail1">
									 <div class="form-group">
										 <label for="exampleInputEmail1">اسم العميل</label>
										 <select  name="client_id" class="form-control">
											 @foreach ($clients as $client)
												 <option value="{{$client->id}}">{{$client->name}}</option>

											 @endforeach
										 </select>
									 </div>
									 <div class="form-group">
                     <label for="exampleInputEmail1">سعر البيع</label>
                     <input type="number" min="0" name="sale_price" class="form-control" id="exampleInputEmail1" placeholder="سعر البيع">
                   </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">دفعة مقدمه</label>
										 <input type="number" name="advance"  class="form-control" id="exampleInputEmail1" placeholder="دفعه مقدمه">
									 </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">تكرار القسط</label>
										 <input type="number" name="installement_interval" class="form-control" id="exampleInputEmail1" placeholder="تكرار القسط">
									 </div>
									 <div class="form-group">
										 <label for="exampleInputEmail1">عدد الأقساط</label>
										 <input type="number" name="no_of_installements" class="form-control" id="exampleInputEmail1" placeholder="عدد الأقساط">
									 </div>
									 <div class="form-group">
										<label for="exampleInputEmail1">ملحوظات</label>
										<input type="text" name="sale_notes" class="form-control" id="exampleInputEmail1" placeholder="ملحوظات">
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
