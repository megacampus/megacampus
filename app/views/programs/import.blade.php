@extends('layouts.programs')

@section('title')
	<title> Import Programs </title>
@stop


@section('body')


	<div class="col-lg-10" align="left">

        <div class="panel panel-default">
            <div class="panel-heading">

              <h3 class="panel-title">Import Programs</h3>
           
			</div>           
         	 <div class="panel-body">


				<div class="row">
					<!--Display a message return from the controller in the Session Object-->
					<div class="col-sm-12 text-center">
							@if (Session::has('message'))

								@if (Session::get('error'))
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
					</div>
				</div>

				{{ HTML::ul($errors->all())}}

				{{ Form::open(array('url'=>'programs/import','files'=>true)) }}
  
					{{ Form::label('Upload File') }}

					{{ Form::file('fileToImport') }}
				  	<br/><br/>
				  	<!-- submit buttons -->
				  	<!--{{ Form::submit('Preview', array('class'=>"btn btn-sm btn-primary")) }}-->
					{{ Form::submit('Import', array('class'=>"btn btn-sm btn-primary")) }}
				  
				  	<!-- reset buttons -->
				  	{{ Form::reset('Clear', array('class'=>"btn btn-sm btn-primary")) }}

				  	{{link_to(Url::to(Session::get('UrlPrevious')), 'Back', array('class' => 'btn btn-sm btn-primary'));}}
			  
			 	 {{ Form::close() }}
				

			</div>


		</div>	
	<!--/div>	
</div-->			
</div>

	
@stop