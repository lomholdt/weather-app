@extends('main')

@section('content')

<div class="row">
	@foreach($weatherData as $w)
        <div class="col s12 m4 animated fadeIn">
          <div class="card small">
            <div class="card-image animated fadeIn">
              {{-- <img src="https://placeimg.com/640/480/nature"> --}}
              <span class="card-title">{{ $w->getOrigin() }}</span>
            </div>
            <div class="card-content">
             	<p>{{ $w->getTemp() }} &deg;C</p>
             	@if($w->getDescription())
              		<p>{{ $w->getDescription() }}</p>
              	@else
              		<p>&nbsp;</p>
             	@endif
             	<p>{{ $w->getCountry() }}</p>
             	<p>{{ $w->getCity() }}</p>
            </div>
          </div>
        </div>
	@endforeach
</div>
@stop