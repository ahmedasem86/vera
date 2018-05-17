
@extends('adminlte::layouts.app')


@section('main-content')
<style media="screen">

</style>
	<div class="container-fluid spark-screen">
    <div class="row">
      <h3>{{ trans('adminlte_lang::land.partners') }}</h3>

      <div class="col-md-12 " style="background-color:white; padding-top:10px;">
        <table class="table table-bordered text-center">
          <thead>
            <tr class="text-center">
              <td>{{ trans('adminlte_lang::land.name') }}</td>
              <td>{{ trans('adminlte_lang::land.address') }}</td>
              <td>{{ trans('adminlte_lang::land.partnerid') }}</td>
            </tr>
          </thead>
          <tbody>
                  @foreach ($partners as $partner)
										<tr >
                    <td><a href="partner/{{$partner->id}}">{{$partner->name}}</a></td>
                    <td><a href="partner/{{$partner->id}}">{{$partner->address}}</a></td>
                    <td><a href="partner/{{$partner->id}}">{{$partner->partner_id}}</a></td>
									</tr>

                  @endforeach
          </tbody>
        </table>
      </div>
    </div>
		</div>
	</div>
@endsection
