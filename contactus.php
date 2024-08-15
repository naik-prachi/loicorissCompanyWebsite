<?php

	include ("db.php");	

	$msg = "";
	if(isset($_POST["submit"]))
	{
		$email = $_POST["email"];

		$email = mysqli_real_escape_string($db, $email);
		
		//Query
		
		$sql="SELECT emailID FROM subscribers WHERE email='$email'";
		
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(mysqli_num_rows($result) == 1)
		{
			echo "<script>";
			echo "alert(Sorry... You're already subscribed!);";
			echo "</script>";
		}
		else
		{
			$query = mysqli_query($db, "INSERT INTO subscribers (emailID) VALUES ('$email')");
			if($query)
			{
				echo "<script>";
				echo "alert(Thank You! You are now registered.);";
				echo "</script>";
			}
		}
	}
?>


<!DOCTYPE html>
<html lang="en-IN">
<head>
<!--Meta data-->
	<meta name="descripton" content ="Loicoriss">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/stylesredux.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/w3.css">
	<!--meta data ends-->
	<link rel="stylesheet" type="text/css" href="css/mainstyle.css">
	<title>Loicoriss</title>

	<link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Old+Standard+TT" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nova+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ropa+Sans" rel="stylesheet">
</head>
<!--Body Begins-->
<body>
	<center>
	<script src="js/wow.min.js"></script>
	<script >
		new WOW().init();
	</script>

	<!--container starts-->
	<div class ="container_cu" id="container">

		<!--NavBar Starts-->
		<nav class="navbar navbar-inverse navbar-fixed-top place">
	  	<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    	<div class="navbar-header">
		      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only ">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      		<ul class="nav navbar-nav">
	        		<li class="active"><a href="index.php" class="placetxt">HOME<span class="sr-only">(current)</span></a></li>
	        		<li><a href="aboutus.html" class="placetxt">About Us</a></li>
	        		<li><a href="#" class="placetxt">Contact Us</a></li>
	      		</ul>
	    	</div><!-- /.navbar-collapse -->
	  	</div><!-- /.container-fluid -->
		</nav>
		<!--NavBar Ends-->

	<br><br><br>
		<!--ContactUs starts-->
		<div class="row contact" name="row2">
			<div class="row contus"></div>
			<br><br><br>
			<div>
				<p class="cuphrase col-lg-12 col-md-12 col-sm-12">Join the Loicoriss Fam to know more about the products being developed, stay tuned by subscribing to us!</p>
			</div>
		</div>
		<!--ContactUs Ends-->
	<br>
		<!--Map Starts-->	
		<div class="row map" name="row2">
			<div class="col-lg-6 col-md-6 col-sm-12 left_map"></div>
			<div class="col-lg-6 col-md-12 col-sm-12 right_map">
				<br>
				<div class="row row2_1">
					<p class="add">Email:loicoriss@gmail.com<br>Phone:2134567890<br><a class="add_link"href="https://www.google.co.in/maps?q=ciba+verna+goa&rlz=1C1CHBF_enIN756IN756&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiR9sOM7JjcAhWIQI8KHeIqCWcQ_AUICigB">Address:Agnel Technical Education Complex Verna Salcete Goa</a></p>
				</div>

				<div class="row row2_2"></div>
			</div>
		</div>
		<!--Map Ends-->
	<br>
		<!-- subscription starts-->
		<div class="sub" id="sub">
			<br>
			<h1 class="joinfam">JOIN THE LOICORISS FAM!</h1>
			<p class="join"><br><br><br><b>Join the Loicoriss fam and stay in touch with us by subscribing down below!</b></p>
			<!--Subform begins-->
				<form method="post" action="contactus.php">
					<div class="row frm" name="frm">
						<br>
						<center>					
							<input type="text" class="frmip" placeholder="Enter email to subscribe!" name="email">
							<br><br><br>
							<button type="submit" class="frmip" name="submit">Submit</button>
						</center>
					</div>
				</form>
			<!--Subform Ends-->
		</div>
		<!-- subscription ends-->
<br><br>
	</div>
	<!--container ends-->
	</center>

	<script src="js/jquery.js"></script>    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>

</body>
<!--Body Ends-->