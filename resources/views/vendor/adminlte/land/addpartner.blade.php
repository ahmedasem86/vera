
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
           <form role="form" method="get" action="/landpartner/store">
             <input type="number" name="land_id" class="form-control hidden" value="{{$land->id}}"id="exampleInputEmail1">
               <div class="form-group">
                     <label>الشريك</label>
                     <select name="id" class="form-control">
                       @foreach ($partners as $partner)
                       <option value="{{$partner->id}}">{{$partner->name}}</option>
                       @endforeach
                     </select>
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">حصة الأرض </label>
                     <input type="number" name="land_percentage" step="0.1" max="100"class="form-control" id="exampleInputEmail1" placeholder="حصة الأرض">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">نسبة المشاركة في المباني </label>
                     <input type="number" name="construction_percentage" step="0.1" max="100"class="form-control" id="exampleInputEmail1" placeholder="حصة المباني ">
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
