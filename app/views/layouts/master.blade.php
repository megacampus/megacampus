
<!DOCTYPE html>
  
  <html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--style>
    	a.navbar-brand {
    		background:#336699;

		}
   	</style-->

	@section('title')
		<title>*** Missing Title Description ***</title>
	@show



<head>

	<!--This section appears by default if it is not specify-->
	@section('header')

		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

		<!--difer makes the same effect of locate the javascript file at the bottom of html-body -->
		<script difer src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		


		<!--link href="http://bootstrapper.aws.af.cm/bundles/bootstrapper/css/bootstrap.min.css" media="all" type="text/css" rel="stylesheet">
		<!--link href="http://bootstrapper.aws.af.cm/bundles/bootstrapper/css/bootstrap-responsive.min.css" media="all" type="text/css" rel="stylesheet">
		<link href="http://bootstrapper.aws.af.cm/bundles/bootstrapper/css/nav-fix.css" media="all" type="text/css" rel="stylesheet"-->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--link href="http://bootstrapper.aws.af.cm/css/prettify.css" media="all" type="text/css" rel="stylesheet">
    <link href="http://bootstrapper.aws.af.cm/css/app.css" media="all" type="text/css" rel="stylesheet"-->
	@show


</head>


<body>


<div class="navbar navbar-inverse navbar-fixed-top" >
	
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
			<li><a href="#">Campus</a></li>
			<li><a href="/programs">Programs</a></li>
			<li><a href="#">Courses</a></li>
			<li><a href="#">Teachers</a></li>
			<li><a href="#">Students</a></li>
			<li><a href="#">Events</a></li>
		</ul>
		<div class="col-sm-12 col-md-1 pull-right">
			<ul class="nav navbar-nav navbar-right">	
				<li><a href="#"><i class="fa fa-power-off"></i>&nbsp;Logout</a></li>
			</ul>
		</div>
		
	</div>
</div>

	
@yield('body')
	

 <footer style="display: block;background-color: black; color: #e9e9e9; padding:10px; border: 1px solid lightgray margin:0px" >
	<div class="container">
		<div class="row" >
			<div class="col-sm-3">
				<!--p style="color:#5567f1"-->
				<p> MegaCampus (2014-2016) &copy; </p>
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
			<div class="col-sm-2">
				<p>Code by: TMTechnologies&reg</p>
			</div>

		</div>

		
	</div>

	<div class="container">
		<div class="row" >
		<br><br><br><br><br><br><br><br><br>
		</div>
	</div>
</footer>
	

</body>


</html>