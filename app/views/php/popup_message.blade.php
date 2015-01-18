<!--script to display messages store in the session objet from the backend-->

@if (Session::has('message'))
	@if (Session::has('error'))
 		<p class="alert alert-danger" data-dismiss="alert">
 		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
 	@else
		<p class="alert alert-info" data-dismiss="alert">
		<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>	
 	@endif
	 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<strong>
				
				{{ Session::get('message') }}
			</strong>
	 </p>
@endif
