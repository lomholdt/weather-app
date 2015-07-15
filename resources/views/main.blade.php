<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Weather App</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
	 <link rel="stylesheet" href="/css/animate.css">
	 <link rel="stylesheet" href="/css/app.css">
	 <link rel="stylesheet" href="/css/hover-min.css">
	 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	@include('partials.nav')
	<div class="container">
		@yield('content')
	</div>
	@include('partials.footer')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>



</body>
</html>