<?php

 include 'dbconnect.php';

  if(isset($_POST['dbInsert']))
  {
  	$name = $_POST['name'];
  	$address = $_POST['address'];
  	$gender = $_POST['gender'];
  	$age = $_POST['age'];
  	$mark = $_POST['mark'];
  	
  	$sql = "INSERT INTO `school`.`student` (`roll`, `name`, `address`, `gender`, `age`, `mark`) VALUES (NULL, '$name', '$address', '$gender', '$age', '$mark')";

  	$result = mysqli_query($con, $sql);
  	
  	if($result)
  	{
  		echo '<div class="alert alert-success">
			  <strong>Record Inserted Successfully</strong>
			</div>';
  	}
  	
  }

?>