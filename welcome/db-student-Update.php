<?php 
 
 include 'dbconnect.php';

 if($_POST['dbUpdate'])
 {
 	$roll = $_POST['stud_id'];
 	$name = $_POST['name'];
 	$address = $_POST['address'];
 	$gender = $_POST['gender'];
 	$age = $_POST['age'];
 	$mark = $_POST['mark'];
 	 
 	$sql = "UPDATE `school`.`student` SET `name` = '$name',
 			                              `address` = '$address',
 			                              `gender` = '$gender', 
 			                              `age` = '$age', 
 			                              `mark` = '$mark' WHERE `student`.`roll` = $roll";
 	
 	$result = mysqli_query($con, $sql);
 	 
 	if($result)
 	{
 		echo '<div class="alert alert-success">
			  <strong>Record Update Successfully</strong>
			</div>';
 	}
 }

?>