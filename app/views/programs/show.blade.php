@extends('layouts.programs')

@section('title')
	<title> Show Programs </title>
@stop


@section('body')

	<div class="col-lg-10" align="left">

        <div class="panel panel-default">
            <div class="panel-heading">

              <h3 class="panel-title">Show Program</h3>
           
			</div>           
         	 <div class="panel-body">

		
				{{ HTML::ul($errors->all())}}

	
				{{ Form::model($program, array('route' => array('programs.show', ''), 'method' => 'GET')) }}


				<div class="conteiner">
					
					<div class="row">
						<div class="col-sm-2 text-left">
									
									{{Form::label('Program ID');}}						
									{{Form::text('program_id',null, array('class' => 'form-control','size' => '10px','readonly' => 'readonly'));}}
								</div>
									<br>
						</div>
					</div>
		
					<div class="row">
						<div class="col-sm-12 text-left">
								<div class="control-group">
									{{Form::label('Program Name');}}						
									{{Form::text('program_name',null,array('class' => 'form-control','size' => '10px','readonly' => 'readonly'));}}
								</div>
						</div>
					</div>

					<br>

					<div class="control-group">
						{{Form::label('Program Description');}}
						{{Form::textarea('program_description',null,array('class' => 'form-control','size' => '10px','readonly' => 'readonly'));}}
					</div>

					<hr>	

					<div class="control-group">
						
						{{link_to(URL::to(Session::get('UrlPrevious')), 'Back', array('class' => 'btn btn-sm btn-primary'));}}

					</div>	
				</div>

				{{  Form::close() }}

			</div>



			</div>	
			
	</div>


@stop