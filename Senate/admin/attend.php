<?php
session_start();
 if($_SESSION['IS_AUTHENTICATED'] == 1){
	$link=mysqli_connect('localhost','root','');
	if(!$link)
	{
		die('Failed to connect:'.mysql_error());
	}
	$db=mysqli_select_db($link,'test_2014105');
	if(!$db)
	{
		die('Unable to select database');
	}
	$qry='SELECT * FROM student_info WHERE flag=0';
	$result=mysqli_query($link,$qry);
	
	echo'<h1>The Result details-</h1>';
	echo'<table border="1">
			<th>Roll No</th>
			<th>Name</th>
			<th>Branch</th>';
			
	while($row=mysqli_fetch_assoc($result))
	{
		echo '<tr>
					<td>'.$row['rollno'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['branch'].'</td>
					
				</tr>';
	}
	echo '</table>';
 }
 else{
 header(' location:login.php' ); 
 exit();
 }
	?>
				