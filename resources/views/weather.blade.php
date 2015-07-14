@extends('main')

@section('content')

<div class="row">
	<div class="col s6">
		<div>
			@foreach ($owm_output->list as $owm)
		    <h4>{{ $owm->name }}, {{ $owm->sys->country }}</h4>
		    <p>{{ $owm->main->temp }} (OpenWeatherMap.org)</p>
			@endforeach
		</div>
	</div>
	<div class="col s6"> 

	@foreach($weather as $w)

		{{ $w->results->channel->item->condition->temp }}



	@endforeach

	 </div>
	
</div>
@stop