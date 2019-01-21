<?php
 //Start the session to see if the user is authencticated user.
 session_start();
 //Check if the session variable for user authentication is set, if not redirect
//to login page.
 if(isset($_SESSION['IS_AUTHENTICATED' ]) && $_SESSION['IS_AUTHENTICATED' ] == 1){ 
 echo '<a href="log_out.php">Log Out </a>
 </br></br></br>' ;
 echo '<a href="comm.php">View Committee Members Details</a><br>' ;
  echo '<a href="matches.php">View Matches Details</a><br>' ;
   echo '<a href="teams.php">View teams Details</a><br>' ;
    echo '<a href="penalties.php">View Penalties Details</a><br>' ;
 exit(); 
 }
 else{
 header(' location:login.html' ); 
 exit();
 }
?>