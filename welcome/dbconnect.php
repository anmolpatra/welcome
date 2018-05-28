<?php

 $con = mysqli_connect("localhost","root","","School");
 
 if($con)
 {
 	#echo '<div class="alert alert-success"> 		  <strong>Connection Success!</strong> </div>';
 }
 else 
 {
 	echo "Unsuccessful ".mysqli_connect_error();
 }
 
 
?>