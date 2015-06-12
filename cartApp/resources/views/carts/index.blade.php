@extends('app')
	
@section('content')
		<h1>
			Carts Page
		</h1>
		
		@foreach($carts as $cart) 

			<h3>				 
				{{ $cart->project_name }}
			</h3>

		@endforeach

@stop