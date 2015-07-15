@extends('main')

@section('content')

<div class="row">

	@foreach($weatherData as $w)
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">{{ $w->getOrigin() }}</span>
              <p>{{ $w->getTemp() }} &deg;C</p>
              @if($w->getDescription() != null)
              	<p>{{ $w->getDescription() }}</p>
              @endif
              <p>{{ $w->getCountry() }}</p>
              <p>{{ $w->getCity() }}</p>
            </div>
          </div>
        </div>
	@endforeach




	

</div>
@stop