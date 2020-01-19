@extends('admin.default')

@section('page-header')
	City <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['CitiesController@store'],
			'files' => true
		])
	!!}

		@include('admin.cities.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
	
@stop
