
<!DOCTYPE html>
  
  <html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

 
	@section('title')
		<title>*** Missing Title Description ***</title>
	@show



<head>

	<!--This section appears by default if it is not specify-->
	

		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

		<!-- <link href="assets/css/pagelayout.css" rel="stylesheet"> -->

		<!--difer makes the same effect of locate the javascript file at the bottom of html-body -->
		<script defer="defer" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script defer="defer" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
</head>


<body>

<div id="wrapper">

	<div id="header" class="navbar navbar-inverse navbar-fixed-top" >
		
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			@section('brand')
		 		<a class="navbar-brand" rel="home" href="/" style="color:white;">MegaCampus</a>
			@show
		</div>	
		
		<div class="collapse navbar-collapse">
			
			<ul class="nav navbar-nav" >
				<li><a href="#">Dashboard</a></li>
				<li><a href="/programs">Programs</a></li>
				<li><a href="#">Admissions</a></li>
				<li><a href="#">Employees</a></li>
				<li><a href="#">Inventory</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Finances</a></li>
				<li><a href="#">Security</a></li>
				<li><a href="#">Settings</a></li>
			</ul>
			<div class="col-sm-12 col-md-1 pull-right">
				<ul class="nav navbar-nav navbar-right">	
					<li><a href="#"><i class="fa fa-power-off"></i>&nbsp;Logout</a></li>
				</ul>
			</div>
			
		</div>
	</div>

	<div id="content" style="height:650px">
		<br> <br> <br> <br>
		<div class="col-sm-2 text-left">
			<!--Display the left panel with system options-->
		    <div class="panel panel-default">

		        <div class="panel-heading">
		          <h3 class="panel-title">Menu</h3>
				</div>           

				<table class= "table table-bordered table-hover" style="color:blue;">
					
					<tr><td>Campus</td></tr>
					<tr><td><a href="/programs">Programs</a></td></tr>
					<tr><td>Courses</td></tr>
					<tr><td>Teachers</td></tr>
					<tr><td>Students</td></tr>
					<tr><td>Calendar</td></tr>
					<tr><td>&nbsp</td></tr>
					<tr><td>Help</td></tr>
					
				</table>
			</div>

		</div>	
		

		@yield('body')

	</div>	

	<div id="footer" style="background-color:black;color:white; padding:3px">
			<div class="container">
				<div class="row" >
					<div class="col-sm-6" align="left">
						<!--p style="color:#5567f1"-->
						<p> MegaCampus (2014-2016) &copy; </p>
					</div>
					<div class="col-sm-6" align="right">
						<p>Code by TMTechnologies&reg</p>
					</div>
				</div>

				<div class="row" >
					<div class="col-sm-3" align="left">
						
					</div>
					<div class="col-sm-3">
						<p>A complete software to help you to manage the information of your education institute.</p>
						<p>From a Small Preschool Institute to a Huge University Campus </p>
					</div>
					<div class="col-sm-2">
						<ul>
							<p>Navigation:</p>
							<li><a href="#">Company</a></li>
							<li><a href="#">Products</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
					<div class="col-sm-2">
						<ul class="list-unstyled">
							<p>Follow up:</p>
							<li><a href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a></li>
							<li><a href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i>&nbsp;Google +</a></li>
							<li><a href="#"><i class="fa fa-github"></i>&nbsp;GitHub</a></li>
							
						</ul>
					</div>
					<div class="col-sm-2" align="left">
						
					</div>
				</div>	
			</div>
	</div>		
</div>

</body>


</html>