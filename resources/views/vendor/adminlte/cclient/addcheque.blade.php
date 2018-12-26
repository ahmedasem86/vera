
@extends('adminlte::layouts.app')


@section('main-content')
	<div class="container spark-screen">
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
			<div class="col-md-6 " style="background-color:white; padding:10px;">
        <!-- general form elements -->
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">شيك جديد ل {{$client->name}}</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form style="padding:5px;" role="form" method="get" action="/cheque/store/{{$client->id}}">
            {{ csrf_field() }}
                  <div class="form-group">
                    <label for="exampleInputEmail1">اسم المستلم</label>
                    <select  name="user_id" class="form-control">
                      @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail1">رقم الشيك</label>
                     <input type="number" min="0" name="cheque_id" class="form-control" id="exampleInputEmail1" placeholder="رقم الشيك" required>
                   </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">قيمة الشيك</label>
                    <input type="number" name="value"  class="form-control" id="exampleInputEmail1" placeholder="قيمة الشيك" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">تاريخ الاستلام</label>
                    <input type="date" class="form-control" name="receiving_date" value="<?=  date('Y-m-d'); ?>" />
                  </div>
                  <div class="form-group">
                   <label for="exampleInputEmail1">ملحوظات</label>
                   <input type="text" name="sale_notes" class="form-control" id="exampleInputEmail1" placeholder="ملحوظات">
                 </div>
             <div class="box-footer">
               <button type="submit" class="btn btn-primary">تسجيل</button>
             </div>
           </form>
         </div>
			</div>
		</div>
	</div>
@endsection
