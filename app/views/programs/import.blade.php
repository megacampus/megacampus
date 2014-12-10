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

				{{ HTML::ul($errors->all())}}

				{{ Form::open(array('url'=>'programs/import','files'=>true)) }}
  
					{{ Form::label('Upload File') }}

					{{ Form::file('fileToImport') }}
				  	<br/><br/>
				  	<!-- submit buttons -->
				  	{{ Form::submit('Preview File', array('class'=>"btn btn-sm btn-primary")) }}
					{{ Form::submit('Import File', array('class'=>"btn btn-sm btn-primary")) }}
				  
				  	<!-- reset buttons -->
				  	{{ Form::reset('Clear File', array('class'=>"btn btn-sm btn-primary")) }}
			  
			 	 {{ Form::close() }}
				

			</div>


		</div>	
	<!--/div>	
</div-->			
</div>

	
@stop