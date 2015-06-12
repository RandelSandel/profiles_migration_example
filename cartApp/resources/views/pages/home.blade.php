@extends('app')


@section('content')

Home Page


<p>Counter:</p>

<h1>Counter: <span id="count">0</span></h1>

<button id="subtract">Subtract 1</button>
<button id="add">Add 1</button>


<script src="http://code.jquery.com/jquery.js"></script>

<script>
	
	$('#add').on('click', function(){
		console.log("clicked the button");
		var counter = $('#count');
		var count = parseInt(counter.text()); //0
		
		counter.text(count + 1);
	});
	
	$('#subtract').on('click', function(){
		
		var counter = $('#count');
		var count = parseInt(counter.text()); //0
		
		counter.text(count - 1);
	});

</script>

@endsection



@stop