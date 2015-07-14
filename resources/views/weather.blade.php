@extends('main')

@section('content')
	<div>
		@foreach ($owm_output->list as $owm)
	    <p>{{ $owm->name }}: {{ $owm->main->temp }}</p>
		@endforeach
	</div>
@stop