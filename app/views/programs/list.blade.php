@extends('layouts.programs')

<!--"Programs Management"-->

@section('title')

	<title> {{$title}} </title>
@stop




@section('body')


	<div class="col-sm-10" align="left">

	    <div class="panel panel-default" >

	        <div class="panel-heading">
	          <h3 class="panel-title">{{$title}}</h3>
			</div>           

	        <div class="panel-body bg-gray">

				<div class="row">	

					<!--Display the Create Program, Export and Import Buttom-->
					<div class="col-sm-4 text-left">
						<a href="{{URL::to ('programs/create')}}" class="btn btn-sm btn-primary">
						<!--{{$create_link}}-->
							<!--i class="glyphicon glyphicon-plus"></i-->
							&nbsp;&nbsp;Add&nbsp;&nbsp;
						</a>
						<a href={{URL::to ('programs/export')}} class="btn btn-sm btn-primary">		
							<!--i class="glyphicon glyphicon-open"></i-->
							Export
						</a>
						<a href="{{URL::to ('programs/import_file')}}" class="btn btn-sm btn-primary">	 
							<!--i class="glyphicon glyphicon-save"></i-->
							Import
						</a>
					</div>	
					
					<!--Div for the filter label show when a search is executed-->
					<div class="col-sm-4 text-right">	
						<!--TODO: Hide and Show with JQuery if a Search was executed-->
						<div id='filter-label-search'> 
							<h4>
							{{Form::label('',$label_search,array('class'=>'label label-warning'))}}
							</h4>
						</div>
					</div>

					<!-- Form for the Search Text/Button-->
					<div class="col-sm-4 text-right">	

						{{ Form::open(array('url' => 'programs/search/', 'method' => 'get')) }}

							<div class="input-group">
						      
						      <input name="search_value" type="text" placeholder='Searching Text...' class="form-control">

						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
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
					            <th data-field="updated_at" width="182">ACTIONS</th>
					           	
					        </tr>
					    </thead>

					    <tbody>

							<!-- Populate the Table Display-->
					    	@foreach($programs as $program)
							    <tr>
							    	
							    	<td>{{ $program->id }}</td>
							    	<td>{{ $program->program_id }}</td>
							        <td>{{ $program->program_name }}</td>
							        <td>{{ $program->program_description }}</td>
							        <td>{{ $program->created_at }}</td>
							        <td>{{ $program->updated_at }}</td>
							        <td >

								    <!-- Form to handle Edit and Delte items-->
									{{ Form::open(array(
																			
										'url' => 'programs/'. $program->id,'class' => 'pull-right')) }}

										<!--'url' => Route::current()->getUri() .'/'. $program->id,
										//		'class' => 'pull-right')) }}*-->

										<a 	class="btn btn-sm btn-primary" 
								        	href="{{ URL::to('programs/' . $program->id . '/show') }}">
												<!--i class="glyphicon glyphicon-file"></i-->
												&nbsp;View&nbsp;
								        </a>
										
										<a 	class="btn btn-sm btn-primary" 
								        	href="{{ URL::to('programs/' . $program->id . '/edit') }}">
												<!--i class="glyphicon glyphicon-pencil"></i-->				
												&nbsp;Edit&nbsp;				        	
								        </a>
								    
										 {{ Form::open(array('url'=> 'programs/'. $program->id,'method' => 'DELETE'))}}
												
									        <button 
									        	class='btn btn-sm btn-primary' 
									        	type="button" 
									        	data-toggle="modal" 
									        	data-target="#modalWindow" 
									        	data-title="Question" 
									        	data-message= 'Are you sure you want to delete the item selected?'> 
									        	<!--i class="glyphicon glyphicon-trash"></i-->
									        	Delete
									        </button>
									    
									    	@include('php.messagebox')
										
										{{ Form::close() }}    
										                 
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
</div>

<script type="text/javascript">
	

</script>

@stop