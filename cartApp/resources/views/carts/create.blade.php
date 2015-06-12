@extends('app')


@section('content')

<h1>
	Create Cart
</h1>
	
<!-- 	Button to add another form  -->
 	<button type="button" class="btn btn-default btn-sm" id="addField">
  	 Add Another Link
	</button>

	{!! Form::open(['url' => 'carts']) !!}
	
	<div id="formField">
		<div class="form-group" id="projectNameField">
			{!! Form::label('project_name', 'Project Name') !!}
			{!! Form::text('project_name', null, ['class' => 'form-control']) !!}
			<br>
		</div>
	</div>


		<div class="form-group" id="addProjectNameField">
			{!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
		</div>

	{!! Form::close() !!}

<!--------------------- jquery scripts ------------------------>



	<!--click the add buttom to make another form line-->
	<script src="http://code.jquery.com/jquery.js"></script>

 	<script>
		
	$('#addField').on('click', function(){

		console.log("clicked the button");
		var toAdd = $('#formField');

		$(toAdd).append('<div>{!! Form::text('project_name', null, ['class' => 'form-control']) !!}</div><br>');
		
	});
	
	</script>
	

@stop


