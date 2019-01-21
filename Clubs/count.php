<!DOCTYPE html>
<html>
<body>


<?php
								
 //Start the session to see if the user is authencticated user.
 session_start();
 //Check if the session variable for user authentication is set, if not redirect to login
//page.
 //if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
 $branch=$_SESSION['branch'];
 $roll=$_SESSION['USER_ID'];
 $ctp=$_SESSION['type'];
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
 }$m=1;
 $j=$_SESSION['vsel'];
for($i=0;$i<$j;$i++)
{
	if($_POST['option'.$i]==null)
	{
		$m=0;
	}
}
 if($m==1)
 {
 for($i=0;$i<$j;$i++)
 {
	 $vote[$i]=$_POST['option'.$i];
 }
 for($i=0;$i<$j;$i++) 
 {
 $query1 = "UPDATE c_cand_info SET votes=votes+1 WHERE rollno='$vote[$i]' AND type='$ctp'";
 $result1 = mysqli_query($link, $query1);
 }
 
 $query2= "UPDATE clubs_info SET flag=1 WHERE rollno=$roll AND type='$ctp'";
 //Execute query
 
 $result2 = mysqli_query($link, $query2);
 session_unset();
 session_destroy();
 echo '<h1>Thanks!!!For your vote...</h1>'; 
 echo '<a href="log_out.php"><h3 align="right">Logout</h3></a>';
 }
 else
 {
	 header('location:vote.php');
 }
 
 ?>
 <img src="images/2.jpg" align="center" background="cover" width="100%" height="60%">
 </body>
 </html>