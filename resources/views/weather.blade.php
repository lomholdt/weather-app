@extends('main')

@section('content')
	<div>
		@foreach ($owm_output->list as $owm)
	    <h4>{{ $owm->name }}, {{ $owm->sys->country }}</h4>
	    <p>{{ $owm->main->temp }} (OpenWeatherMap.org)</p>
		@endforeach
	</div>
@stop