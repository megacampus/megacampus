@extends('layouts.programs')

<!--"Programs Management"-->

@section('title')

	<title> {{$title}} </title>
@stop




@section('body')


	<div class="col-sm-10" align="left">

	    <div class="panel panel-default" >

	        <div class="panel-heading">
	          <h3 class="panel-title">{{Lang::get('labels.list_program');}}</h3>
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

				<div class="row">	

					<!--Display the Create Program, Export and Import Buttom-->
					<div class="col-sm-4 text-left">
						<a href="{{URL::to ('programs/create')}}" class="btn btn-sm btn-primary">
						<!--{{$create_link}}-->
							<!--i class="glyphicon glyphicon-plus"></i-->
							{{Lang::get('buttons.add');}}
						</a>
						<a href={{URL::to ('programs/export')}} class="btn btn-sm btn-primary">		
							<!--i class="glyphicon glyphicon-open"></i-->
							{{Lang::get('buttons.export');}}
						</a>
						<a href="{{URL::to ('programs/import_file')}}" class="btn btn-sm btn-primary">	 
							<!--i class="glyphicon glyphicon-save"></i-->
							{{Lang::get('buttons.import');}}
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
						      
						      <input name="search_value" type="text" placeholder="{{Lang::get('labels.searchingtext');}}" class="form-control">

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
					            <th data-field="name">
					            	{{Lang::get('columns.program_id');}}
					            </th>
					            <th data-field="name">
					            	{{Lang::get('columns.program_name');}}
					            </th>
					            <th data-field="description">
					            	{{Lang::get('columns.program_description');}}
					            </th>
					            <th data-field="created_at">
					            	{{Lang::get('columns.created_at');}}
					            </th>
					            <th data-field="updated_at">
					            	{{Lang::get('columns.updated_at');}}
					            </th>
					            <th data-field="updated_at" width="182">
					            	{{Lang::get('columns.actions');}}
					            </th>
					           	
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
												{{Lang::get('buttons.view');}}
								        </a>
										
										<a 	class="btn btn-sm btn-primary" 
								        	href="{{ URL::to('programs/' . $program->id . '/edit') }}">
												<!--i class="glyphicon glyphicon-pencil"></i-->				
												{{Lang::get('buttons.edit');}}				        	
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
									        	{{Lang::get('buttons.delete');}}
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
						<p> {{Lang::get('labels.showing');}} {{$programs->getFrom()}} {{Lang::get('labels.to');}} {{$programs->getTo()}} {{Lang::get('labels.of');}} {{$programs->getTotal()}} {{Lang::get('labels.items');}} </p>
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