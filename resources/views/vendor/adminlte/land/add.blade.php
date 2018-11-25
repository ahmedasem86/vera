
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
             <h3 class="box-title">أضف أرض</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form role="form" method="get" action="/land/store">
             <div class="box-body">
               <div class="form-group">
                 <label for="exampleInputEmail1">اسم القطعة</label>
                 <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="اسم القطعة">
               </div>
               <div class="form-group">
                     <label>نوع القطعة</label>
                     <select name="type" class="form-control">
                       <option value="0">ملك</option>
                       <option value="1">مشاركة</option>
                     </select>
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">عنوان القطعة</label>
                     <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="عنوان القطعة">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">مساحة القطعة</label>
                     <input type="number" name="area" step="0.0000000001"class="form-control" id="exampleInputEmail1" placeholder="مساحة القطعة">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">سعر القطعة</label>
                     <input type="number" name="price" step="0.000000000001"class="form-control" id="exampleInputEmail1" placeholder="سعر القطعة">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">التكلفة المتوقعة</label>
                     <input type="number" step="0.000000000001" name="predicted_cost" class="form-control" id="exampleInputEmail1" placeholder="التكلفة المتوقعة">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">تاريخ التعاقد</label>
                     <input type="date" name="contract_date" class="form-control" id="exampleInputEmail1" placeholder="تاريخ التعاقد">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">تاريخ التسليم</label>
                     <input type="date" name="delivery_date" class="form-control" id="exampleInputEmail1" placeholder="تاريخ التسليم">
                   </div>

             <div class="box-footer">
               <button type="submit" class="btn btn-primary">إضافة قطعة</button>
             </div>
           </form>
         </div>
			</div>
		</div>
	</div>

@endsection
