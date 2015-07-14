@extends('main')

@section('content')
<div class="row">
	<div class="col s6">Hi there</div>
	<div> 

	@foreach($weather as $w)

		{{ $w->results->channel->item->condition->temp }}



	@endforeach

	 </div>
	
</div>
@stop