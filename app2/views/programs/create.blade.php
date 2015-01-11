@extends('layouts.programs')

<!--"Programs Management"-->

@section('title')
	<title> {{Lang::get('labels.add_program')}}</title>
@stop


	
@section('body')

	<div class="col-sm-10 align="left"">

	    <div class="panel panel-default">

	         <div class="panel-heading">
	     		 <h3 class="panel-title">{{Lang::get('labels.add_program')}} </h3>
			</div>           

	        <div class="panel-body">

				<div class="row">
					<!--Display a message return from the controller in the Session Object-->
					<div class="col-sm-12 text-center">

					 	@include('php.popup_message')
							
					</div>
				</div>

				@include('php.validation_message')

				{{ Form::open(array('url' => 'programs')) }}

				
					<div class="row">
						<div class="col-sm-2 text-left">
								<div class="control-group">
									{{Form::label(Lang::get('fields.program_id'));}}				
									{{Form::text('program_id','', array('class' => 'form-control','size' => '10px'));}}
								</div>
									<br>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12 text-left">
								<div class="control-group">
									{{Form::label(Lang::get('fields.program_name'));}}
									{{Form::text('program_name','',array('class' => 'form-control','size' => '10px'));}}
								</div>
						</div>
					</div>

					<br>

					<div class="control-group">
						{{Form::label(Lang::get('fields.program_description'));}}
						{{Form::textarea('program_description','',array('class' => 'form-control','size' => '10px'));}}
					</div>

					<hr>

					<div class="control-group">
						{{Form::submit(Lang::get('buttons.add'),array ('class'=>'btn btn-sm btn-primary'));}}
						{{Form::reset(Lang::get('buttons.clear') ,array ('class'=>'btn btn-sm btn-primary'));}}
					
						{{link_to(URL::to(Session::get('UrlPrevious')), Lang::get('buttons.back'), array('class' => 'btn btn-sm btn-primary'));}}

						
					</div>	
				

				{{  Form::close() }}



			</div>

		</div>
	</div>
</div>


@stop

