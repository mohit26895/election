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
	$qry='SELECT student_info.*,candidate_info.* FROM candidate_info INNER JOIN student_info on candidate_info.rollno=student_info.rollno';
	$result=mysqli_query($link,$qry);
	
	echo'<h1>The Result details-</h1>';
	echo'<table border="1">
			<th>Roll No</th>
			<th>Name</th>
			<th>Branch</th>;
			<th>Votes</th>';
			
	while($row=mysqli_fetch_assoc($result))
	{
		echo '<tr>
					<td>'.$row['rollno'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['branch'].'</td>
					<td>'.$row['votes'].'</td>
					
				</tr>';
	}
	echo '</table>';
 }
 else{
 header(' location:login.php' ); 
 exit();
 }
	?>
				