@extends('layouts.master')

@section('title')
	<title> Import Programs </title>
@stop


@section('body')

<!--br><br>
	<!--div class="page-header" ><h3>Study Program List</h3></div-->


<!--div class="container">
	
		<!--br><br-->
<br><br><br>
<!--div class="row"-->
	<div class="col-sm-2 text-left">
		<!--div class="panel panel-default">
			<div class="panel-heading">
				  <h3 class="panel-title">Options</h3>
			</div>
			 <div class="panel-body"-->
			 	<div class="well">
   					 <ul class="nav nav-list">
   					 	<li class="nav-header"><h4>Main Menu</h4></li>
						<li><a href="/">Home</a></li>
						<li><a href="#">Campus</a></li>
						<li><a href="/programs">Programs</a></li>
						<li><a href="#">Courses</a></li>
						<li><a href="#">Teachers</a></li>
						<li><a href="#">Students</a></li>
						<li><a href="#">Events</a></li>
						<li class="divider"></li>
						<li><a href="#">Help</a></li>
					</ul>				
				</div>
			<!--/div>
		</div-->
	</div>

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
</div>>

	
@stop