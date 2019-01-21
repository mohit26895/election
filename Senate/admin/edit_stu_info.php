
 <?php
//Start the session to see if the user is authenticated user.
session_start();
//Check if the user is authenticated first. Or else redirect to login page
//if(isset($_SESSION[ 'IS_AUTHENTICATED' ]) && $_SESSION[ 'IS_AUTHENTICATED' ] == 1){
 //require('login.php')
 // Code to be executed when 'Insert' is clicked.
 if($_POST['submit'] == 'Insert' ){ 
 //validation flag to check that all validations are done
// $validationFlag = true;
 //Check all the required fields are filled
 if(!($_POST[ 'rollno' ] && $_POST[ 'name' ] && $_POST[ 'gender' ] && $_POST[ 'batch' ] && $_POST[ 'branch' ])){
 echo 'All the fields marked as * are compulsary.<br>' ;
 }
 // $validationFlag = false;
 

 $Rollno = $_POST[ 'rollno' ];
 $Name = "'". $_POST[ 'name' ]. "'";
 $Gender = "'". $_POST[ 'gender' ]. "'";
 $Branch = "'". $_POST[ 'branch' ]. "'";
 $Batch = "'". $_POST[ 'batch' ]. "'";
 
 
 //If all validations are correct, connect to MySQL and execute the query
 //if($validationFlag){
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
 //Create Insert query
 $query = "INSERT INTO student_info
 (rollno,name,gender,branch,batch)
 VALUES
 ($Rollno,$Name,$Gender,$Branch,$Batch)";
  //Execute query
 $results = mysqli_query($link, $query);
 //Check if query executes successfully
 if($results == FALSE)
 echo mysqli_error($link) . '<br>' ;
 else
 echo 'Data inserted successfully! ' ;
 }
 
 
// Code to be executed when 'Update' is clicked.
 if ($_POST[ 'submit' ] == 'Update' ){
 if(! $_POST[ 'rollno' ])
 echo 'Enter the Roll Number as it is the primary key.' ;
 else{
 $validationFlag = true;
 $Rollno = $_POST[ 'rollno' ];
 $update = "UPDATE student_info SET rollno = $Rollno";

 if($_POST[ 'name' ]){
  $Name = $_POST[ 'name' ];
 $update = $update . ", name =' $Name'";
 }
 if($_POST[ 'gender' ]){
 $Gender = $_POST[ 'gender' ];
 $update = $update . ", gender = '$Gender'";
 }
  if($_POST[ 'batch' ]){
 $Batch = $_POST[ 'batch' ];
 $update = $update . ", batch = '$Batch'";
 }
  if($_POST[ 'branch' ]){
 $Branch = $_POST[ 'branch' ];
 $update = $update . ", branch = '$Branch'";
 }
  
  $update = $update . " WHERE rollno = $Rollno";
 //If all validations are correct, connect to MySQL and execute the query
  if($validationFlag){
 //Connect to mysql server
 $link = mysqli_connect('localhost' , 'root', '');
 //Check link to the mysql server
 if(! $link){
 die('Failed to connect to server: ' . mysqli_error());
 }
 //Select database
 $db = mysqli_select_db($link, 'test_2014105');
 if(!$db){
 die("Unable to select database");
 }
 //Execute query
 $results = mysqli_query($link, $update);
 if($results == FALSE)
 echo mysqli_error($link) . '<br>' ;
 else
 echo mysqli_info($link);
 }
 }
 }
 // Code to be executed when 'Delete' is clicked.
 if ($_POST[ 'submit' ] == 'Delete' ){
 if(! $_POST[ 'rollno' ])
 echo 'Enter the Roll Number as it is the primary key.' ;
 else{
 $Rollno = $_POST[ 'rollno' ];
 $delete = "DELETE FROM student_info WHERE rollno = $Rollno";
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

 //Execute query
 $results = mysqli_query($link, $delete);
 if($results == FALSE)
 echo mysqli_error($link) . '<br>' ;
 else
 echo 'Data deleted successfully' ;
 }
 }
 
/*else{
 header('location:student_reg.php'); 
 exit();
}*/
?>