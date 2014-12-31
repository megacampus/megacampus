
<!DOCTYPE html>
  
  <html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

 
	@section('title')
		<title>Title Description</title>
	@show



<head>

	<!--This section appears by default if it is not specify-->
		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- <link href="assets/css/pagelayout.css" rel="stylesheet"> -->

	<!--difer makes the same effect of locate the javascript file at the bottom of html-body -->

	<style>

		#modalWindow {
		    width: 400px;
		    height: 500px;
		    position: absolute;
		    top: 15%;
		    left: 45%;
		    margin-top: -25px;
		    margin-left: -200px;
		    padding: 20px;

		}

		.modal-header
         {
            background-color: #F6F6F6;
            border-radius: 10px 10px 0px 0px;
            padding: 10px;
         }

		#footer{
			color:gray;
			background: lightgray;
			bottom:-27px;
			border: none;
		}

		.bottombrand{
			padding-left: 20px;
		}
		.bottomcodeby{
			padding-right: 20px;
		}


	</style>
		
	
</head>


<body>

<div id="wrapper">
	
	<div id="header" class="navbar navbar-inverse navbar-fixed-top">
		
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
				<li><a href="#">{{Lang::get('menus.dashboard');}}</a></li>
				<li><a href="/programs">{{Lang::get('menus.programs');}}</a></li>
				<li><a href="#">{{Lang::get('menus.admissions');}}</a></li>
				<li><a href="#">{{Lang::get('menus.employees');}}</a></li>
				<li><a href="#">{{Lang::get('menus.inventory');}}</a></li>
				<li><a href="#">{{Lang::get('menus.services');}}</a></li>
				<li><a href="#">{{Lang::get('menus.finances');}}</a></li>
				<li><a href="#">{{Lang::get('menus.security');}}</a></li>
				<li><a href="#">{{Lang::get('menus.settings');}}</a></li>
			</ul>
			<div class="col-sm-12 col-md-1 pull-right">
				<ul class="nav navbar-nav navbar-right">	
					<li>
						<a href="#">
							<i class="fa fa-power-off"></i>&nbsp;{{Lang::get('menus.logout');}}
						</a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>

	<div id="content"> <!--style="height:770px"-->
		<br> <br> <br> <br>
		<div class="col-sm-2 text-left">
			<!--Display the left panel with system options-->
		    <div class="panel panel-default">

		        <div class="panel-heading">
		          <h3 class="panel-title">{{Lang::get('labels.leftpanel');}}</h3>
				</div>           

				<table class= "table table-bordered table-hover" style="color:blue;">
					
					<tr><td>{{Lang::get('menus.campus');}}</td></tr>
					<tr><td><a href="/programs">{{Lang::get('menus.programs');}}</a></td></tr>
					<tr><td>{{Lang::get('menus.courses');}}</td></tr>
					<tr><td>{{Lang::get('menus.teachers');}}</td></tr>
					<tr><td>{{Lang::get('menus.students');}}</td></tr>
					<tr><td>{{Lang::get('menus.calendar');}}</td></tr>
					<tr><td>&nbsp</td></tr>
					<tr><td>{{Lang::get('menus.help');}}</td></tr>
					
				</table>
			</div>

		</div>	
		

		@yield('body')

	</div>	


	<div id="footer" class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="row" >
			<div class="col-sm-6" align="left">
				<!--p style="color:#5567f1"-->
				<p class="bottombrand"> MegaCampus (2014-2016) &copy; </p>
			</div>
			<div class="col-sm-6" align="right">
				<p class="bottomcodeby">{{Lang::get('labels.codeby');}} TMTechnologies &reg; </p>
			</div>
		</div>
	</div>

	<!--div id="footer" style="background-color:black;color:white; padding:3px">
			<div class="container">
				<div class="row" >
					<div class="col-sm-6" align="left">
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
	</div-->		

</div>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!--script src="views/js/scripts.js"></script-->

<script type="text/javascript">
	
$(document).ready(function() {

  $('#modalWindow').on('show.bs.modal', function (e) {

     // get data title sent as a parameter
     $title = $(e.relatedTarget).attr('data-title');
     // find the title section and set the title to be display
     $(this).find('.modal-title').text($title);
     // get data message sent as a parameter
     $message = $(e.relatedTarget).attr('data-message');
     // find the body section and set the message to be display
     $(this).find('.modal-body p').text($message);

      // Pass form reference to modal for submission on yes/ok
     var form = $(e.relatedTarget).closest('form');
     $(this).find('.modal-footer #confirm').data('form', form);
  });
    
  // Form confirm (yes/ok) handler, submits form 
  $('#modalWindow').find('.modal-footer #confirm').on('click', function(){
    console.log('User Press YES!!');
     $(this).data('form').submit();
  });


});

function notification() {
    console.log('entro a notification');
}



</script>


</body>

</html>