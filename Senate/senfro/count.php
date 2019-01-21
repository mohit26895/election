<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/main1.css" />
</head>
<body>

<?php
								
 //Start the session to see if the user is authencticated user.
 session_start();
 //Check if the session variable for user authentication is set, if not redirect to login
//page.
 //if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
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
 }
 $vote=$_POST['option'];
 //Prepare query
 $query1 = "UPDATE candidate_info SET votes=votes+1 WHERE rollno='$vote'";
 $query2= "UPDATE student_info SET flag=1 WHERE rollno=$roll";
 //Execute query
 $result1 = mysqli_query($link, $query1);
 $result2 = mysqli_query($link, $query2);
 session_unset();
 session_destroy();
 echo 'Thanks!!!For your vote...:P<br>'; 
 echo '<a href="http://web.iiitdmj.ac.in/~mohitkumawat/CS201L/Senate/log_out.php">Logout</a>';
 ?>
 
 </body>
 </html>