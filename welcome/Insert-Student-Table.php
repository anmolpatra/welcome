<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

 <br>

<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
  	<div class="col-md-4">
  	    <?phP 
  	    
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
  	            echo '<script>
                                    window.setTimeout(function(){
       
        window.location.href = "http://localhost/CRUD/Insert-Student-Table.php";

    }, 3000);
                    </script>';
  	        }
  	        
  	    }
  	    
  	    ?>
  	    
  		<form action="#" method="post">
  			<div class="form-group">
			  <label for="name">name:</label>
			  <input type="text" class="form-control" name="name" required="required">
			</div>
			<div class="form-group">
			  <label for="address">address:</label>
			  <input type="text" class="form-control" name="address" required="required">
			</div>
			<div class="form-group">
			  <label for="sel1">Select Gender:</label>
			  <select class="form-control" name="gender" required="required">
			    <option value="Male">Male</option>
			    <option value="Female">Female</option>
			  </select>
			</div>
			<div class="form-group">
			  <label for="age">age:</label>
			  <input type="number" class="form-control" name="age" required="required">
			</div>
			<div class="form-group">
			  <label for="mark">marks:</label>
			  <input type="text" class="form-control" name="mark" required="required">
			</div>
			<input type="submit" class="btn btn-success btn-block" name="dbInsert" value="Submit" />
  		</form>
  		<br>
  		<br>
  		<br>
  		<a href="http://localhost/CRUD/Student-Details.php" target="_blank" class="btn btn-info">Details</a>
  	</div>
  	<div class="col-md-4"></div>
  </div> 
</div>

</body>
</html>