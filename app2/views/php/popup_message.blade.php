<!--script to display messages store in the session objet from the backend-->

@if (Session::has('message'))
	@if (Session::get('error')!=0)
 		<p class="alert alert-danger" data-dismiss="alert">
 	@else
		<p class="alert alert-info" data-dismiss="alert">
 	@endif
	 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<strong>
				{{ Session::get('message') }}
			</strong>
	 </p>
@endif
