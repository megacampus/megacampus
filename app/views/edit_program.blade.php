@extends('layouts.master')

@section('title')
	<title> Edit Programs </title>
@stop



@section('body')

<!--br><br>
	<!--div class="page-header" ><h3>Study Program List</h3></div-->



	
		<!--br><br-->
<br><br><br>
<!--div class="row"-->

	<div class="col-sm-2 text-left">
		<!--Display the left panel with system options-->
	    <div class="panel panel-default">

	        <div class="panel-heading">
	          <h3 class="panel-title">Menu</h3>
			</div>           

			<table class= "table table-bordered table-hover" style="color:blue;">
				
				<tr><td>Campus</td></tr>
				<tr><td><a href="/programs">Programs</a></td></tr>
				<tr><td>Courses</td></tr>
				<tr><td>Teachers</td></tr>
				<tr><td>Students</td></tr>
				<tr><td>Events</td></tr>
				<tr><td>&nbsp</td></tr>
				<tr><td>Help</td></tr>
				
			</table>
		</div>

	</div>

	<div class="col-lg-10" align="left">

        <div class="panel panel-default">
            <div class="panel-heading">

              <h3 class="panel-title">Edit Program</h3>
           
			</div>           
         	 <div class="panel-body">

					<!--button type="button" class="btn btn-primary">New</button>		
					<button type="button" class="btn btn-primary">Edit</button>
					<button type="button" class="btn btn-primary">Delete</button>
					<button type="button" class="btn btn-primary">Export</button>
					<button type="button" class="btn btn-primary">Import</button-->
					
				{{ HTML::ul($errors->all())}}

				
				{{ Form::model($program, array('route' => array('programs.update', $program->id), 'method' => 'PUT')) }}


				<div class="conteiner">
					
					<div class="row">
						<div class="col-sm-2 text-left">
									
									{{Form::label('Program ID');}}						
									{{Form::text('program_id',null, array('class' => 'form-control','size' => '10px'));}}
								</div>
									<br>
						</div>
					</div>
		
					<div class="row">
						<div class="col-sm-12 text-left">
								<div class="control-group">
									{{Form::label('Program Name');}}						
									{{Form::text('program_name',null,array('class' => 'form-control','size' => '10px'));}}
								</div>
						</div>
					</div>

					<br>

					<div class="control-group">
						{{Form::label('Program Description');}}
						{{Form::textarea('program_description',null,array('class' => 'form-control','size' => '10px'));}}
					</div>

					<hr>	


				

					<div class="control-group">
						
						{{Form::submit('Update Changes',array ('class'=>'btn btn-primary'));}}
						<!--{{Form::button('Go Back',array ('class'=>'btn btn-default'));}}-->
									
						{{link_to(URL::previous(), 'Go Back', array('class' => 'btn btn-primary'));}}

					</div>	
					
				</div>

				{{  Form::close() }}


			</div>
			
		</div>	
	<!--/div-->	
</div>>			


	
@stop