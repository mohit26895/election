<?php
 //if ($_POST[ 'submit' ] == 'Login' ){
 //Collect POST values
 $login = $_POST[ 'login' ];
 $password = $_POST[ 'password' ];
 if($login=='mohit268' && $password=='love007'){
  session_start();
 $_SESSION['IS_AUTHENTICATED'] = 1;
 $_SESSION[ 'USER_ID' ] = $login;
 header('location:main_page.php' );
 }
 else{
 //Login failed
 include('login.php' );
 echo '<center>Incorrect Username or Password !!!<center>' ;
  exit();
 }
 //if query was successful it should fetch 1 matching record from the table.
 
 
 ?>