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
		<link rel="stylesheet" href="assets/css/main1.css" />
			<link rel="stylesheet" href="assets/css/TableCSSCode.css" />
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
									<h1><a href="#" id="logo">Student Gymkhana</a></h1>

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
$type=$_SESSION['type'];
$branch=$_SESSION['branch'];
$roll=$_SESSION['USER_ID'];
 
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
 }$k=0;
 //Prepare query
 $query = "SELECT flag FROM clubs_info WHERE type ='$type' AND rollno=$roll" ;
 //Execute query
 $result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);


if($row['flag']==0)
	{ 
 
 
 $j=sizeof($_SESSION['club']);
 
 for($i=0;$i<$j;$i++)
    {
    // and print out the values
   // echo $_SESSION['club'][$i].'<br>';
	
	//echo 'Cordinator<br>';
	
	 
	$query = "SELECT student_info.name,c_cand_info.* FROM c_cand_info INNER JOIN student_info on student_info.rollno=c_cand_info.rollno WHERE cname ="."'".$_SESSION['club'][$i]."'"." AND post='Coordinator'"; 
	
 //Execute query
 $result = mysqli_query($link, $query);
echo "<table class='CSSTableGenerator'>
 <tr><th></th><th>Roll No</th><th>Name</th><th>Club</th>
 <th>Post</th></tr>";
	while($row = mysqli_fetch_assoc($result))
		
 {  
/*echo "<form action='count.php' method='post'>
 <input type='radio' name='option' value=".$row['rollno'].">".$row['rollno']."<br>"; */
 
 echo "<tr><td><form action='count.php' method='post'>
 <input type='radio' name='option".$k."' value=".$row['rollno']."></td><td>".$row['rollno']."</td><td>".$row['name']."</td><td>".$_SESSION['club'][$i]."</td><td>".$row['post']."</td></tr><br>";
	
    }
	echo '</table>';
	$k=$k+1;
	
	$query1 = "SELECT student_info.name,c_cand_info.* FROM c_cand_info INNER JOIN student_info on student_info.rollno=c_cand_info.rollno WHERE cname ="."'".$_SESSION['club'][$i]."'"." AND post='Co-Coordinator'"; 
 //Execute query
 $result1 = mysqli_query($link, $query1);
echo "<table class='CSSTableGenerator'>
 <tr><th></th><th>Roll No</th><th>Name</th><th>Club</th>
 <th>Post</th></tr>";
	while($row1 = mysqli_fetch_assoc($result1))
 {  echo "<tr><td><form action='count.php' method='post'>
 <input type='radio' name='option".$k."' value=".$row1['rollno']."></td><td>".$row1['rollno']."</td><td>".$row1['name']."</td><td>".$_SESSION['club'][$i]."</td><td>".$row1['post']."</td></tr><br>";
	
    }
	echo '</table>';$k=$k+1;
	echo '<br><br>';
    }
	echo "<input type='submit' value='Vote!!!'>";
 
 $_SESSION['vsel']=$k;
 
 
 /*while($row = mysqli_fetch_array($result))
 {
 echo "<form action='count.php' method='post'>
 <input type='radio' name='option' value=".$row['rollno'].">".$row['name']."<br>";
 }
 echo "<input type='submit' value='Vote!!!'>";*/
}
 else
 {	
	 echo '<br><br><br><h1 class="middle">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp You Have already Casted your Vote!!!</h1><br>';
 }

 
 
 
 
 
 
 
 
?>
									
									
									
									<br><br><br>
									
								</div>
								
							</div>
						</div>
					</div>
				</div>

	<br>
	<br>
	<br>
	<br>

			
				

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