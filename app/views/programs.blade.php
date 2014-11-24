@extends('layouts.master')

<!--"Programs Management"-->

@section('title')

	<title> {{$title}} </title>
@stop


@section('body')

				

<br><br><br>

<div class="conteiner">
	
	<div class="col-sm-2 text-left">

	 	<!--Display the left panel with system options-->
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
				<br>
				<li><a href="#">Help</a></li>
			</ul>				
		</div>
	</div>


			
	<div class="col-sm-10 text-left">
			<!--br><br-->
	    <div class="panel panel-default">

	        <div class="panel-heading">
	          <h3 class="panel-title">{{$title}}</h3>
			</div>           

	        <div class="panel-body bg-gray">

				<div class="row">
					<!--Display a message return from the controller in the Session Object-->
					<div class="col-sm-12 text-center">
							@if (Session::has('message'))
								<p class="alert alert-info" data-dismiss="alert">
									<strong>
										{{ Session::get('message') }}
									</strong>
								</p>
							@endif
					</div>
				</div>


				<div class="row">	
				
					<!--Display the Create Program, Export and Import Buttom-->
					<div class="col-sm-4 text-left">
						<a href="{{URL::to ('programs/create')}}" class="btn btn-sm btn-primary">{{$create_link}}
						</a>
						<a href={{URL::to ('programs/export')}} class="btn btn-sm btn-primary">		Export to Xls
						</a>
						<a href="{{URL::to ('programs/import_file')}}" class="btn btn-sm btn-primary">	 Import from Xls
						</a>
					</div>	
					
					<!--Div for the filter label show when a search is executed-->
					<div class="col-sm-4 text-right">	
						<!--TODO: Hide and Show with JQuery if a Search was executed-->
						<div id='filter-label-search'> 
							{{Form::label('',$label_search,array('class'=>'label label-warning'))}}
						</div>
					</div>

					<!-- Form for the Search Text/Button-->
					<div class="col-sm-4 text-right">	

						{{ Form::open(array('url' => 'programs/search/', 'method' => 'get')) }}

							<div class="input-group">
						      
						      <input name="search_value" type="text" placeholder='Searching Text...' class="form-control">

						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="submit">Search</button>
						      </span>

						    </div>
												  
						{{ Form::close() }}

						
					</div>
				</div>	
				
				<br>
				
				<div class="table-responsive">
		
					<table class= "table table-striped table-bordered table-condensed table-hover">
					    <thead>
					        <tr>
					            <!--Displays the Table Headers"-->
					            <th data-field="id"></th>
					            <th data-field="name">PROGRAM ID</th>
					            <th data-field="name">PROGRAM NAME</th>
					            <th data-field="description">PROGRAM DESCRIPTION</th>
					            <th data-field="created_at">CREATED AT</th>
					            <th data-field="updated_at">UPDATED AT</th>
					            <th data-field="updated_at" width="170">ACTIONS</th>
					           	
					        </tr>
					    </thead>

					    <tbody>

							<!-- Populate the Table Display-->
					    	@foreach($programs as $program)
							    <tr>
							    	<!--td class="center">
							        	<input type="checkbox" id="checkrow" value="1"/>
							        </td-->
							    	<td>{{ $program->id }}</td>
							    	<td>{{ $program->program_id }}</td>
							        <td>{{ $program->program_name }}</td>
							        <td>{{ $program->program_description }}</td>
							        <td>{{ $program->created_at }}</td>
							        <td>{{ $program->updated_at }}</td>
							        <td >

								        <!--a href="/programs">
								        	<div class="glyphicon glyphicon-pencil" ></div>
								        </a>
								        <a href="programs/destroy/" >
								        	<div class="glyphicon glyphicon-trash"></div>
								        </a-->
			     							    

									<!--{{Form::delete('programs/'. $program->id, 'Delete', array('class'=>'btn btn-default'))}}-->

									<!-- Form to handle Edit and Delte items-->
									{{ Form::open(array(
																			
										'url' => 'programs/'. $program->id,							'class' => 'pull-right')) }}

										<!--'url' => Route::current()->getUri() .'/'. $program->id,
										//		'class' => 'pull-right')) }}*-->

										<a 	class="btn btn-sm btn-primary" 
								        	href="{{ URL::to('programs/' . $program->id . '/show') }}">
												View								        	
								        </a>
										
										<a 	class="btn btn-sm btn-primary" 
								        	href="{{ URL::to('programs/' . $program->id . '/edit') }}">
												Edit								        	
								        </a>

					                    {{ Form::hidden('_method', 'DELETE') }}
					                    {{ Form::submit('Delete', array('class' => 'btn btn-sm  btn-primary')) }}
					                
					                {{ Form::close() }}

		  					       	</td>
							    </tr>
					    	@endforeach

						</tbody>

					</table>
				</div>

				<!-- Display a label with the from/to of the pagination-->					
				<div class="col-sm-3 text-left">
					<div align="left">
						<p> Showing {{$programs->getFrom()}} de {{$programs->getTo()}} of {{$programs->getTotal()}} items </p>
					</div>
				</div>

				<!--Display the pagination links/buttons-->
				<div class="col-sm-9 text-right">
						{{$programs->appends(array('search_value' => $search_value))->links()}}
				</div>

			</div>

		</div>
	</div>
</div>>


@stop