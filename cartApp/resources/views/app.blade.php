<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/all.css') }}" rel="stylesheet">


</head>
<body>
	@include('partials.nav')

	
	<div class="container">
		@include ('flash::message')
					
		@yield('content')	
	</div>
	
	
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<script>
		$('#flash-overlay-modal').modal();
		$('div.alert').not('.alert-important').delay(3000).slideUp(300);
	</script>
	
</body>
</html>
