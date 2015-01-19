@extends('layouts.home')

@section('title')
	<title> MegaCampus Home </title>
@stop


@section('brand')

<a class="navbar-brand" rel="home" style="color:white;">MegaCampus</a>



@stop


@section('body')

	
<div class="container">

	<br><br><br><br>

	<div class="row">
		<div class="jumbotron" >	
			<div class="text-center"-->
			    <h1>{{Lang::get('labels.academics_title');}}</h1>
			    <p class="lead">{{Lang::get('labels.home_subtitle');}}</p>
			</div>
		</div>
	</div>
	
		

	<div class="row">

		<div class="col-lg-4" align="center">
								
			<div class="panel panel-default">
	            <div class="panel-heading">

					<h3 class="panel-title">{{Lang::get('labels.home_group1');}}</h3>

	           	</div>

              	<div class="panel-body bg-gray">
					<div class="ul">
						<div class="li">{{Lang::get('menus.campus');}}</div>
						<div class="li"><a href="/programs">{{Lang::get('menus.programs');}}</div>
						<div class="li">{{Lang::get('menus.courses');}}</div>
						
					</div>
					
						
					
				</div>
			
			</div>	
		</div>

		<div class="col-lg-4" align="center">
			<div class="panel panel-default">
	            <div class="panel-heading">

					<h3 class="panel-title">{{Lang::get('labels.home_group2');}}</h3>

	           	</div>

              	<div class="panel-body bg-gray" sytle="height:200px">
					<div class="ul">
						<div class="li">{{Lang::get('menus.teachers');}}</div>
						<div class="li">{{Lang::get('menus.students');}}</div>
						<div class="li">{{Lang::get('menus.calendar');}}</div>
					</div>
					
				</div>
			
			</div>	
		</div>

		<div class="col-lg-4" align="center">
			<div class="panel panel-default">
	            <div class="panel-heading">

					<h3 class="panel-title">{{Lang::get('labels.home_group3');}}</h3>

	           	</div>

              	<div class="panel-body bg-gray" sytle="height:200px">
					<div class="ul">
						<div class="li">{{Lang::get('menus.help');}}</div>
						
					</div>
					
				</div>
			
			</div>	
		</div>


	</div>
	
</div>	

<br><br><br><br>
@stop