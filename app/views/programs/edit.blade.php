@extends('layouts.programs')

@section('title')
	<title> Edit Programs </title>
@stop



@section('body')

	<div class="col-lg-10" align="left">

        <div class="panel panel-default">
            <div class="panel-heading">

              <h3 class="panel-title">Edit Program</h3>
           
			</div>           
         	 <div class="panel-body">

				<div class="row">
					<!--Display a message return from the controller in the Session Object-->
					<div class="col-sm-12 text-center">
							@if (Session::has('message'))

							 <p class="alert alert-info" data-dismiss="alert">

							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<strong>
										{{ Session::get('message') }}
									</strong>
							 </p>
							@endif
					</div>
				</div>



					
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
						
						{{Form::submit('Update',array ('class'=>'btn btn-sm btn-primary'));}}
						<!--{{Form::button('Go Back',array ('class'=>'btn btn-default'));}}-->
									
						<!--{{link_to(URL::previous(), 'Go Back', array('class' => 'btn btn-primary'));}}-->
						{{link_to(Url::to(Session::get('UrlPrevious')), 'Back', array('class' => 'btn btn-sm btn-primary'));}}

					</div>	
					
				</div>

				{{  Form::close() }}


			</div>
			
		</div>	
	<!--/div-->	
</div>	


	
@stop