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
			    <h1>{{Lang::get('labels.academics_title');}}</h1>
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
		
				<div class="col-sm-3 text-left">
				<!--Display the left panel with system options-->
					<table class= "table table-bordered table-hover" style="color:blue;">

						<tr><td>{{Lang::get('menus.campus');}}</td></tr>
						<tr><td><a href="/programs">{{Lang::get('menus.programs');}}</a></td></tr>
						<tr><td>{{Lang::get('menus.campus');}}</td></tr>
							
						
					
					</table>
					
				</div>

				<div class="col-sm-3 text-left">
				<!--Display the left panel with system options-->
					<table class= "table table-bordered table-hover" style="color:blue;">

						<tr><td>{{Lang::get('menus.courses');}}</td></tr>
						<tr><td>{{Lang::get('menus.teachers');}}</td></tr>
						<tr><td>{{Lang::get('menus.campus');}}</td></tr>
						
					
					</table>
					
				</div>
				<div class="col-sm-3 text-left">
				<!--Display the left panel with system options-->
					<table class= "table table-bordered table-hover" style="color:blue;">

						<tr><td>{{Lang::get('menus.students');}}</td></tr>
						<tr><td>{{Lang::get('menus.calendar');}}</td></tr>
						<tr><td>{{Lang::get('menus.campus');}}</td></tr>
						
					
					</table>
					
				</div>


				<div class="col-sm-3 text-left">
				<!--Display the left panel with system options-->
					<table class= "table table-bordered table-hover" style="color:blue;">

						<tr><td>{{Lang::get('menus.help');}}</td></tr>
						<tr><td>{{Lang::get('menus.campus');}}</td></tr>
						<tr><td>{{Lang::get('menus.campus');}}</td></tr>
						
					
					</table>
					


				</div>

				
				
		</div>	
	

		</div>
	</div>
</div>


@stop