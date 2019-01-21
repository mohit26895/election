<?php
echo '<body bgcolor="">';
 //Start the session to see if the user is authencticated user.
 session_start();
 //Check if the session variable for user authentication is set, if not redirect
//to login page.
 if(isset($_SESSION['IS_AUTHENTICATED' ]) && $_SESSION['IS_AUTHENTICATED' ] == 1){ 
 echo '<a href="log_out.php">Log Out </a>
 </br></br></br>' ;
 echo '<table border="1" align="center">';
 echo '<tr><td colspan="4"> Senate</td></tr><td><a href="result.php">View Senate Results</a><br></td>' ;
  echo '<td><a href="attend.php">View Non Casted Votes</a><br></td><td><a href="student_reg.php">Update Student info</a></td><td><a href="candidate_reg.php">Update Candidate Info</a></td></tr></table>' ;
   echo '<br><table border="1"><tr><td><a href="cresults.php">View Clubs Results</a><br></td>' ;
    echo '<td><a href="cattend.php">View Non Casted Club Votes</a><br></td></tr></table>' ;
 exit(); 
 }
 else{
 header(' location:login.php' ); 
 exit();
 }
?>