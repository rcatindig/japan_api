@extends('admin.default')

@section('page-header')
	Tourist Spot <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['TouristSpotController@store'],
			'files' => true
		])
	!!}

		@include('admin.tourist_spots.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
	
@stop
