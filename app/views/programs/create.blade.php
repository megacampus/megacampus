@extends('layouts.programs')

<!--"Programs Management"-->

@section('title')
	<title> {{$title}} </title>
@stop


	
@section('body')

	<div class="col-sm-10 align="left"">

	    <div class="panel panel-default">

	         <div class="panel-heading">
	     		 <h3 class="panel-title">{{Lang::get('labels.add_program');}} </h3>
			</div>           

	        <div class="panel-body">

				<div class="row">
					<!--Display a message return from the controller in the Session Object-->
					<div class="col-sm-12 text-center">
							@if (Session::has('message'))
								@if (Session::has('error'))
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



			@if ($errors->all())
				<div class="alert alert-danger" data-dismiss="alert">

				 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<strong>ERRORS:
						{{ HTML::ul($errors->all())}}
						</strong>
				</div>	
			@endif

				

			{{ Form::open(array('url' => 'programs')) }}

			
				<div class="row">
					<div class="col-sm-2 text-left">
							<div class="control-group">
								{{Form::label(Lang::get('columns.program_id'));}}				
								{{Form::text('program_id','', array('class' => 'form-control','size' => '10px'));}}
							</div>
								<br>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12 text-left">
							<div class="control-group">
								{{Form::label(Lang::get('columns.program_name'));}}
								{{Form::text('program_name','',array('class' => 'form-control','size' => '10px'));}}
							</div>
					</div>
				</div>

				<br>

				<div class="control-group">
					{{Form::label(Lang::get('columns.program_description'));}}
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

