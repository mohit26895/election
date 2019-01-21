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
	$qry='SELECT student_info.*,c_cand_info.* FROM c_cand_info INNER JOIN student_info on c_cand_info.rollno=student_info.rollno';
	$result=mysqli_query($link,$qry);
	
	echo'<h1>The Result details-</h1>';
	echo'<table border="1">
			<th>Roll No</th>
			<th>Name</th>
			<th>Club</th><th>Post</th>
			<th>Votes</th>';
			
	while($row=mysqli_fetch_assoc($result))
	{
		echo '<tr>
					<td>'.$row['rollno'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['cname'].'</td>
					<td>'.$row['post'].'</td>
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
				