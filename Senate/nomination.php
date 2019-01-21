<!DOCTYPE HTML>
<!--
	Halcyonic by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>IIITDMJ GYMKHANA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets1/css/main.css" />
		<link rel="stylesheet" href="assets1/css/TableCSSCode.css" />
		<link rel="shortcut icon" href="images/InstituteLogo.jpg"/>
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
									<h1><a href="#" id="logo">Student Senate</a></h1>

								<!-- Nav -->
									<nav id="nav">
										<a href="test.php">Student Info</a>
										<a href="nomination.php">Nomination</a>
										<a href="vote.php">Vote!!!</a>
										<a href="log_out.php" class="button-big">Logout!</a>
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
 //if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
 $branch=$_SESSION['branch'];
 //Connect to mysql server
  $link = mysqli_connect('localhost' , 'root', '');
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
 $query = "SELECT candidate_info.rollno,student_info.name,student_info.branch,candidate_info.batch,candidate_info.backlog,candidate_info.phone,student_info.gender FROM candidate_info INNER JOIN student_info ON candidate_info.rollno=student_info.rollno WHERE student_info.branch='$branch'";
 //Execute query
 $result = mysqli_query($link, $query);
 echo "<table class='CSSTableGenerator'>
 <tr><th>Roll No</th>
 <th>Name</th>
 <th>Branch</th>
 <th>Batch</th>
 <th>Backlog</th>
 <th>Phone</th>
 <th>Gender</th>
 </tr>";
 while($row = mysqli_fetch_array($result))
 {
 echo "<tr><td>" . $row[ 'rollno' ] . "</td>
 <td>" . $row[ 'name' ]. "</td>
 <td>" . $row[ 'branch' ] . "</td>
 <td>" . $row[ 'batch' ] . "</td>
 <td>" . $row[ 'backlog' ] . "</td>
 <td>" . $row[ 'phone' ] . "</td>
 <td>" . $row[ 'gender' ] . "</td>
</tr>";
 }
 echo "</table></center>";
 
 
 
 
 
 
 
 
?>
									
									<br><br>
									
									
									
								</div>
								
							</div>
						</div>
					</div>
				</div>

	

			
				
			<footer id="footer" align="center" color="black">
				<ul class="copyright">
					<li>&copy; IIITDM Jabalpur.</li><li>Credits:2nd year Undergraduate students</a></li>
				</ul>
			</footer>
		

		</div> 
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>