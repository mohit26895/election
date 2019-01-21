
 <?php
//Start the session to see if the user is authenticated user.
session_start();
//Check if the user is authenticated first. Or else redirect to login page
if(isset($_SESSION['IS_AUTHENTICATED' ]) && $_SESSION['IS_AUTHENTICATED' ] == 1){
 //require('login.php' );
}
//else{
 //header('location:login_form.php' ); 
 //exit();
//}
?>
<html>
<head>  <link rel="stylesheet" href="styles.css"></head>
 <body style="background-color:#f2f2f2;">
 <center>
 <h1 style="color:blue;text-align:center;font-family:castellar">Student Registration/Updation Form</h1>
 <form action="edit_stu_info.php" method="post">
 <table cellpadding = "10">
 <tr>
 <td style="color:Red;text-align:center;font-family:castellar"><b>Roll No*</b></td>
 <td><input type="text" name="rollno" maxlength="7"></td>
 </tr>
 <tr>
 <td style="color:Red;text-align:center;font-family:castellar"><b>Name*</b></td>
 <td><input type="text" name="name" maxlength="25"></td>
 </tr>
 <tr>
 <td style="color:Red;text-align:center;font-family:castellar"><b>Gender*</b></td>
 <td><input type="text" name="gender" maxlength="1"></td>
 </tr>
 <tr>
 <tr>
 <td style="color:Red;text-align:center;font-family:castellar"><b>Batch*</b></td>
 <td><input type="text" name="batch" maxlength="4"></td>
 </tr>
 <tr>
 <td style="color:Red;text-align:center;font-family:castellar"><b>Branch*</b></td>
 <td><input type="text" name="branch" maxlength="3"></td>
 </tr>

  <table cellpadding="10">
 <tr>
 <td><input type="submit" class="btn" name="submit" value="Insert">
 <td><input type="submit" class="btn" name="submit" value="Update">
 <td><input type="submit" class="btn" name="submit" value="Delete"></td>
 </tr>
 </table>
 </table>
 </form>
 </center>
 </body>
</html>

