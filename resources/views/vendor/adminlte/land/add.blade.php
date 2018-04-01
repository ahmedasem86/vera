
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
                 <label for="exampleInputEmail1">{{ trans('adminlte_lang::land.landname') }}</label>
                 <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="{{ trans('adminlte_lang::land.landname') }}">
               </div>
               <div class="form-group">
                     <label>{{ trans('adminlte_lang::land.type') }}</label>
                     <select name="type" class="form-control">
                       <option value="0">ملك</option>
                       <option value="1">مشاركة</option>
                     </select>
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">{{ trans('adminlte_lang::land.address') }}</label>
                     <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="{{ trans('adminlte_lang::land.address') }}">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">{{ trans('adminlte_lang::land.area') }}</label>
                     <input type="number" name="area" step="0.0000000001"class="form-control" id="exampleInputEmail1" placeholder="{{ trans('adminlte_lang::land.area') }}">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">{{ trans('adminlte_lang::land.price') }}</label>
                     <input type="number" name="price" step="0.000000000001"class="form-control" id="exampleInputEmail1" placeholder="{{ trans('adminlte_lang::land.price') }}">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">{{ trans('adminlte_lang::land.predicted_cost') }}</label>
                     <input type="number" step="0.000000000001" name="predicted_cost" class="form-control" id="exampleInputEmail1" placeholder="{{ trans('adminlte_lang::land.predicted_cost') }}">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">{{ trans('adminlte_lang::land.contract_date') }}</label>
                     <input type="date" name="contract_date" class="form-control" id="exampleInputEmail1" placeholder="{{ trans('adminlte_lang::land.contract_date') }}">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputEmail1">{{ trans('adminlte_lang::land.delivery_date') }}</label>
                     <input type="date" name="delivery_date" class="form-control" id="exampleInputEmail1" placeholder="{{ trans('adminlte_lang::land.delivery_date') }}">
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
