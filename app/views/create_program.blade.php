@extends('layouts.programs')

<!--"Programs Management"-->

@section('title')
	<title> {{$title}} </title>
@stop


	
@section('body')

	<div class="col-sm-10 align="left"">

	    <div class="panel panel-default">

	         <div class="panel-heading">
	     		 <h3 class="panel-title">{{$title}} </h3>
			</div>           

	        <div class="panel-body bg-gray">

			{{ HTML::ul($errors->all())}}

			{{ Form::open(array('url' => 'programs')) }}

			
				<div class="row">
					<div class="col-sm-2 text-left">
							<div class="control-group">
								{{Form::label('Program ID');}}						
								{{Form::text('program_id','', array('class' => 'form-control','size' => '10px'));}}
							</div>
								<br>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12 text-left">
							<div class="control-group">
								{{Form::label('Program Name');}}						
								{{Form::text('program_name','',array('class' => 'form-control','size' => '10px'));}}
							</div>
					</div>
				</div>

				<br>

				<div class="control-group">
					{{Form::label('Program Description');}}
					{{Form::textarea('program_description','',array('class' => 'form-control','size' => '10px'));}}
				</div>

				<hr>

				<div class="control-group">
					{{Form::reset('Clear Fields',array ('class'=>'btn btn-primary'));}}
					{{Form::submit('Save Changes',array ('class'=>'btn btn-primary'));}}
					<!--{{Form::button('Go Back',array ('class'=>'btn btn-default'));}}-->
			
					{{link_to(URL::previous(), 'Go Back', array('class' => 'btn btn-primary'));}}

					
				</div>	
			

			{{  Form::close() }}



			</div>

		</div>
	</div>
</div>


@stop

