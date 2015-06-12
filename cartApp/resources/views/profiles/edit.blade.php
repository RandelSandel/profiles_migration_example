@extends('app')
	
@section('content')
		<h1>
			Edit Profile Page
		</h1>
	    <h3>{{ $user->name }}</h3>

        <p>{{ $profile->bio }}</p>
		

@stop