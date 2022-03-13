
<?php 

include "conn.php";
session_start();

	if(basename($_SERVER['PHP_SELF']) == 'A_dash.php'){

		if($_SESSION['Permission'] !== 'A') {

			    	header('location:../Functions/logout.php');
		}
	}

?>

<script>
	



</script>

	<!DOCTYPE html>
 	<html lang="en"> 

 		<head> 

 			<!-- Meta Data -->
 				<meta charset="utf-8">
			    <meta http-equiv="X-UA-Compatible" content="IE=edge">
			    <meta name="viewport" content="width=device-width, initial-scale=1">

			    <meta name="description" content="">
			    <meta name="Lyndon Forbes Bowen Jr." content="">
			    <link rel="icon" href="../IMG/r.ico">

			<!-- Title -->
			    <title> ITS Verve</title>

 			<!-- Main CSS StyleSheet -->
 				 <link href="../Style/css/bootstrap.min.css" rel="stylesheet"/>
 				 <link href="../Style/css/dashboard.css" rel="stylesheet"/>

 			<!-- Main JS StyleSheet -->
 			
 			<!-- Bootstrap StyleSheets -->  
 				 <link href="../Style/css/ie10-viewport-bug-workaround.css" rel="stylesheet"/>
 				 <link href="../Style/js/ie-emulation-modes-warning.js"/>
				 <link href="../Style/js/bootstrap.min.js" />
 			<!-- Font Link -->
 				<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lobster" />

 		</head>

 		<body>

 			<!-- navigation bar -->
				<nav class="navbar navbar-inverse navbar-fixed-top">
			      <div class="container-fluid">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			          <a id="home1" class="navbar-brand" href="../Pages/dash.php">Verve</a>
			        </div>
			        <div id="navbar" class="navbar-collapse collapse">
			          <ul class="nav navbar-nav navbar-right">
			            <li><a id="home" href="../Pages/dash.php">Welcome, <?php echo $_SESSION['user'];?></a></li>

				            	<?php  

				            		if($_SESSION['Permission'] == 'A') {

				            			 echo "<li><a href='../A_Pages/A_dash.php'> Admin Hub </a></li>";

				            		}

				     			?>
			            <!--<li><a href="../Pages/settings.php">Settings</a></li>-->
			            <li><a href="../Pages/Profile.php">Profile</a></li>
			            <!--<li><a href="../Pages/help.php">Help</a></li> -->

			             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Actions<span class="caret"></span></a>
        					<ul class="dropdown-menu">
					          <li><a href="../Pages/dash.php">Overview</a></li>
					          <li><a href="../Pages/CartO.php">Checkout Cart</a></li>
					          <li><a href="../Pages/CartI.php">Check-In Cart</a></li>
					            <li><a href="../Pages/Info.php">Reports</a></li>
					        </ul>
					     </li>

			            <li><a href="../Functions/logout.php">Logout</a></li>

			           
			          </ul>
			        </div>
			      </div>

			    </nav> 

			    <?php
										if(isset($_SESSION['Alock']) && $_SESSION['Alock'] == 'S'){

												echo " <div class='alert alert-success alert-dismissable fade in' role='alert'>
		   							 			<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
   												 <strong>Success!</strong> Your change has been made.
											  </div>

											  <script> 

											  	window.setTimeout(function() {
   												 $('.alert').fadeTo(500, 0).slideUp(500, function(){
       											 $(this).remove(); 
  																	  });
															}, 4000);



											  </script>
											  ";

											  $_SESSION['Alock'] = 'None';
											}

											if(isset($_SESSION['Alock2']) && $_SESSION['Alock2'] == 'S'){

												echo " <div class='alert alert-info alert-dismissable fade in' role='alert'>
		   							 			<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
   												 <strong>Success!</strong> Your change has been made.
											  </div>

											  <script> 

											  	window.setTimeout(function() {
   												 $('.alert').fadeTo(500, 0).slideUp(500, function(){
       											 $(this).remove(); 
  																	  });
															}, 4000);



											  </script>
											  ";

											  $_SESSION['Alock2'] = 'None';
											}

											if(isset($_SESSION['V_OUT']) && $_SESSION['V_OUT'] == 'OUT'){

												echo " <div id='pagesec' class='col-sm-9 col-sm-offset-2 col-md-10 col-md-offset-2 main'> <div class='alert alert-success alert-dismissable fade in' role='alert'>
		   							 			<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
   												 <strong>Success!</strong> You have checked out a vehicle.
											  </div>
											  </div>

											  <script> 

											  	window.setTimeout(function() {
   												 $('.alert').fadeTo(500, 0).slideUp(500, function(){
       											 $(this).remove(); 
  																	  });
															}, 4000);



											  </script>
											  ";

											  $_SESSION['V_OUT'] = 'None';
											}

											if(isset($_SESSION['V_IN']) && $_SESSION['V_IN'] == 'IN'){

												echo " <div id='pagesec' class='col-sm-9 col-sm-offset-2 col-md-10 col-md-offset-2 main'><div class='alert alert-success alert-dismissable fade in' role='alert'>
		   							 			<a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
   												 <strong>Success!</strong> You have checked-in a vehicle.
											  </div>
											  </div>

											  <script> 

											  	window.setTimeout(function() {
   												 $('.alert').fadeTo(500, 0).slideUp(500, function(){
       											 $(this).remove(); 
  																	  });
															}, 4000);



											  </script>
											  ";

											  $_SESSION['V_IN'] = 'None';
											}
									?>

			    <?php 

			    if(!isset($_SESSION['user'])) {

			    	header('location:../index.php');

			    }


			    if($_SERVER['PHP_SELF'] == '/ITS-GO/Pages/dash.php' || $_SERVER['PHP_SELF'] == '/ITS-GO/Pages/CartI.php' || $_SERVER['PHP_SELF'] == '/ITS-GO/Pages/CartO.php'|| $_SERVER['PHP_SELF'] == '/ITS-GO/Pages/Info.php' ) {

			    	echo " 
					    <div class='container-fluid'>
					      <div class='row'>
					        <div class='col-sm-3 col-sm-2 sidebar'>
					          <ul class='nav nav-sidebar'>
					            <li id='nav1'><a href='../Pages/dash.php'>Overview</a></li>
					            <li id='nav2'><a href='../Pages/CartO.php'>Checkout Cart</a></li>
					            <li id='nav3'><a href='../Pages/CartI.php'>Check-In Cart</a></li>
					            <li id='nav4'><a href='../Pages/Info.php'>Reports</a></li>
					          </ul>
		 				</div> ";


		 			switch($_SERVER['PHP_SELF']) {

		 				case "/ITS-GO/Pages/dash.php": 
		 					echo "<script> document.getElementById('nav1').className='active'</script>";	
		 					break;

		 				case "/ITS-GO/Pages/CartO.php": 
		 					echo "<script> document.getElementById('nav2').className='active'</script>";	
		 					break;

		 				case "/ITS-GO/Pages/CartI.php": 
		 					echo "<script> document.getElementById('nav3').className='active'</script>";	
		 					break;

		 				case "/ITS-GO/Pages/Info.php": 
		 					echo "<script> document.getElementById('nav4').className='active'</script>";	
		 					break;


		 			}


		 			}

