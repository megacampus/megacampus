
<!--script to display form field validations-->

@if ($errors->all())
	<div class="alert alert-danger" data-dismiss="alert">

	 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<strong>ERRORS:
			{{ HTML::ul($errors->all())}}
			</strong>
	</div>	
@endif
