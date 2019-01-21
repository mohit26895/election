<!DOCTYPE HTML>
<!--
	Halcyonic by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Club Election</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">
						<div class="row">
							<div class="12u">

								<!-- Logo -->
									<h1><a href="#" id="logo">Student Gymkhana</a></h1>

								<!-- Nav -->
									<nav id="nav">
										<a href="cultural.php">Cultural</a>
										<a href="nomination.php">Technical</a>
										<a href="vote.php">Sports</a>
										<a href="http://web.iiitdmj.ac.in/~mohitkumawat/CS201L/Clubs/log_out.php" class="button-big">Logout!</a>
									</nav>

							</div>
						</div>
					</header>
					<div id="banner">
						<div class="container">
							<div class="row">
								<div class="9u 12u(mobile)">

									<?php
									
 //Start the session to see if the user is authencticated user.
 session_start();
 //Check if the session variable for user authentication is set, if not redirect to login
//page.
 if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
 $roll=$_SESSION['USER_ID'];
 $name=$_SESSION['name'];
 echo $name;
 echo $roll;
 echo 'hello';
 //Connect to mysql server
  $link = mysqli_connect('dbms.iiitdmj.ac.in' , '2014105', '2014105ksu');
 //Check link to the mysql server
 if(! $link){
 die('Failed to connect to server: ' . mysqli_error());
 }
 //Select database
 $db = mysqli_select_db($link, 'test_2014105');
 if(! $db){
 die("Unable to select database");
 }
 //Prepare query
 $query = "SELECT cname FROM clubs_info WHERE rollno = $roll AND type='Cultural'";
 //Execute query
 $result = mysqli_query($link, $query);
 echo "Roll No: ".$roll."<br>
 Name: ".$name."<br>";
 echo "Clubs you are registered:-<br>";
 while($row = mysqli_fetch_array($result))
 {echo $row['cname']."<br>";}
 
 
 
 
 
 }
?>
									
									
									
									
									
								</div>
								
							</div>
						</div>
					</div>
				</div>

<!--	

			
				

		

		</div> 
-->
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>