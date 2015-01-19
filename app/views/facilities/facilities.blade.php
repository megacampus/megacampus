@extends('layouts.academics')

<!--"Programs Management"-->

@section('title')
	<title> {{Lang::get('labels.academics_title')}} </title>
@stop





@section('body')
<br> <br> <br> <br>

	<div class="row">
		<div class="jumbotron"  >	
			<div class="text-center">
			    <h1>{{Lang::get('labels.facilities_title');}}</h1>
			    <p class="lead">{{Lang::get('labels.home_subtitle');}}</p>
			</div>
		</div>
	</div>	        
	<div class="col-sm-12" align="left">

	    <div class="panel panel-default" >

	        <div class="panel-heading">
	          <h3 class="panel-title">{{Lang::get('labels.leftpanel')}}</h3>
			</div>           

	        <div class="panel-body">

	        <br>
		
				<div class="col-sm-4 text-left">
				<!--Display the left panel with system options-->
					<table class= "table table-bordered table-hover" style="color:blue;">

						<tr><td>Institute</td></tr>
						<tr><td>Campus</a></td></tr>
						<tr><td>Buildings</td></tr>
							
						
					
					</table>
					
				</div>

				<div class="col-sm-4 text-left">
				<!--Display the left panel with system options-->
					<table class= "table table-bordered table-hover" style="color:blue;">

						<tr><td>Departments</td></tr>
						<tr><td>Offices</td></tr>
						<tr><td>Classrooms</td></tr>
						
					
					</table>
					
				</div>
				<div class="col-sm-4 text-left">
				<!--Display the left panel with system options-->
					<table class= "table table-bordered table-hover" style="color:blue;">

						<tr><td>Courts</td></tr>
						<tr><td>Warehouses</td></tr>
						
						
					
					</table>
					
				</div>


				
				
				
		</div>	
	

		</div>
	</div>
</div>


@stop