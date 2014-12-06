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

					<!--button type="button" class="btn btn-primary">New</button>		
					<button type="button" class="btn btn-primary">Edit</button>
					<button type="button" class="btn btn-primary">Delete</button>
					<button type="button" class="btn btn-primary">Export</button>
					<button type="button" class="btn btn-primary">Import</button-->
					
				{{ HTML::ul($errors->all())}}

				{{ Form::open(array('url'=>'programs/import','files'=>true)) }}
  
					{{ Form::label('file','File',array('id'=>'','')) }}

					{{ Form::file('file','',array('class'=>'btn btn-sm btn-default')) }}
				  	<br/><br/>
				  	<!-- submit buttons -->
				  	{{ Form::submit('File Preview', array('class'=>"btn btn-sm btn-primary")) }}
					{{ Form::submit('File Import', array('class'=>"btn btn-sm btn-primary")) }}
				  
				  	<!-- reset buttons -->
				  	{{ Form::reset('Reset', array('class'=>"btn btn-sm btn-primary")) }}
			  
			 	 {{ Form::close() }}
				

			</div>
			
		</div>	
	<!--/div>	
</div-->			
</div>

	
@stop