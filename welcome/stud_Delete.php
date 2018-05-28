<?php 

 include 'dbconnect.php';
 
 if(isset($_GET['stud_id']))
 {
 	$roll = $_GET['stud_id'];
 	
 	$query = "DELETE FROM `student` WHERE roll = $roll";
 	
 	$result = mysqli_query($con, $query);
 	
 	if($result)
 	{
 		echo "Deletion Successfull.";
 	}
 	
 }

?>