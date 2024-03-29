@extends('admin.default')

@section('page-header')
	City <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['CitiesController@update', $item->id],
			'method' => 'put', 
			'files' => true
		])
	!!}

		@include('admin.cities.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop
