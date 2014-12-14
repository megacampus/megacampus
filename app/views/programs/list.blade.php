@extends('layouts.programs')

<!--"Programs Management"-->

@section('title')

	<title> {{$title}} </title>
@stop




@section('body')




<!--div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title" id="myModalLabel">
                    <strong>DELETE ACTION</strong>
                </h5>
            </div>
            <div class="modal-body">
                <h5>Are you sure to delete the item selected?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </div>
    </div>
  </div>
</div-->



	<div class="col-sm-10" align="left">

	    <div class="panel panel-default" >

	        <div class="panel-heading">
	          <h3 class="panel-title">{{$title}}</h3>
			</div>           

	        <div class="panel-body bg-gray">

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
						        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
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
												View									        	
								        </a>
										
										<a 	class="btn btn-sm btn-primary" 
								        	href="{{ URL::to('programs/' . $program->id . '/edit') }}">
												Edit								        	
								        </a>
								    
										 {{ Form::open(array('url'=> 'programs/'. $program->id,'method' => 'DELETE'))}}
												
									        <button 
									        	class='btn btn-sm btn-primary' 
									        	type="button" 
									        	data-toggle="modal" 
									        	data-target="#modalWindow" 
									        	data-title="QUESTION" 
									        	data-message= 'Are you sure you want to delete the item selected?'> 
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