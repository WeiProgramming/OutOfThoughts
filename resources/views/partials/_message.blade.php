@if(Session::has('success'))
	<div class = "alert alert-success" role = " alert">
		<strong>You got it</strong>
	</div>
@endif

@if(count($errors) > 0)
	
	<div class = "alert alert-danger" role = "alert">
		<strong>Errors:</strong>
	<ul>
			<!--make sure you pull out all the errors in erros obj-->
		@foreach($errors -> all() as $error) 

			<li>Errors</li>

		@endforeach
	</ul>
	</div>

@endif
