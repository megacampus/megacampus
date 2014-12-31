@extends('layouts.programs')

@section('title')
	<title> {{Lang::get('labels.import_program')}} </title>
@stop


@section('body')


	<div class="col-lg-10" align="left">

        <div class="panel panel-default">
            <div class="panel-heading">

              <h3 class="panel-title">{{Lang::get('labels.import_program')}}</h3>
           
			</div>           
         	 <div class="panel-body">


				<div class="row">
					<!--Display a message return from the controller in the Session Object-->
					<div class="col-sm-12 text-center">
							
							@include('php.popup_message')
							
					</div>
				</div>

				<!--{{ HTML::ul($errors->all())}}-->

				{{ Form::open(array('url'=>'programs/import','files'=>true)) }}
  
					{{ Form::label(Lang::get('labels.upload_file')) }}

					{{ Form::file('fileToImport') }}
				  	<br/><br/>
				  	<!-- submit buttons -->
				  	<!--{{ Form::submit('Preview', array('class'=>"btn btn-sm btn-primary")) }}-->
					{{ Form::submit(Lang::get('buttons.import'), array('class'=>"btn btn-sm btn-primary")) }}
				  
				  	<!-- reset buttons -->
				  	{{ Form::reset(Lang::get('buttons.clear'), array('class'=>"btn btn-sm btn-primary")) }}


				  	{{link_to(URL::to(Session::get('UrlPrevious')), Lang::get('buttons.back'), array('class' => 'btn btn-sm btn-primary'));}}


			  
			 	 {{ Form::close() }}
					

			</div>


		</div>	
	<!--/div>	
</div-->			
</div>

	
@stop




 

 
