<?php
 //if ($_POST[ 'submit' ] == 'Login' ){
 //Collect POST values
 $login = $_POST[ 'login' ];
 $password = $_POST[ 'password' ];
 if($login && $password){
 //Connect to mysql server
 $link = mysqli_connect('localhost' , 'root' ,'' );
 //Check link to the mysql server
 if(! $link) {
 die('Failed to connect to server:123 ' . mysqli_error());
 }
  //Select database
 $db = mysqli_select_db($link , 'test_2014105' );
 if(! $db) {
 die("Unable to select database");
 }
 //Create query
 $qry="SELECT * FROM login WHERE login_id = '$login' AND password =
'$password'";
 //Execute query
 $result=mysqli_query($link, $qry);
 //Check whether the query was successful or not
  if($result){
 $count = mysqli_num_rows($result);
 }
 else{
 //Login failed
 include('login.html' );
 echo '<center>Incorrect Username or Password !!!<center>' ;
  exit();
 }
 //if query was successful it should fetch 1 matching record from the table.
 if( $count == 1){
 //Login successful set session variables and redirect to main page.
  session_start();
 $_SESSION[ 'IS_AUTHENTICATED' ] = 1;
 $_SESSION[ 'USER_ID' ] = $login;
 header('location:test.php' );
 }
 else{
 //Login failed
 include('login.html' );
 echo '<center>Incorrect Username or Password !!!<center>' ;
 exit();
 }
 }