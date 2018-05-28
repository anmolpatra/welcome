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
  	  <?php 
  	   
  	   include 'dbconnect.php';
  	  
  	   if (isset($_GET['stud_id']))
  	   {
  	   	 $stud_id = $_GET['stud_id'];
  	   	 
  	   	 $query = "SELECT * FROM `student` WHERE roll = $stud_id";
  	   	 
  	   	 $result = mysqli_query($con, $query);
  	   	 
  	   	 if($row = mysqli_fetch_assoc($result))
  	   	 {
  	  
  	  ?>
  	    
  		<form action="db-student-Update.php" method="post">
  			<input type="hidden" name="stud_id" value="<?php echo $stud_id ?>">
  			<div class="form-group"> 
			  <label for="name">name:</label>
			  <input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name" required="required">
			</div>
			<div class="form-group">
			  <label for="address">address:</label>
			  <input type="text" class="form-control" value="<?php echo $row['address']  ?>" name="address" required="required">
			</div>
			<div class="form-group">
			  <label for="sel1">Select Gender:</label>
			  <select class="form-control" name="gender" required="required">
			    <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
			  </select>
			</div>
			<div class="form-group">
			  <label for="age">age:</label>
			  <input type="number" class="form-control" value="<?php echo $row['age']; ?>" name="age" required="required">
			</div>
			<div class="form-group">
			  <label for="mark">marks:</label>
			  <input type="text" class="form-control" value="<?php echo $row['mark']; ?>" name="mark" required="required">
			</div>
			<input type="submit" class="btn btn-danger btn-block" name="dbUpdate" value="Update" />
  		</form>
  	</div>
  	<div class="col-md-4"></div>
  </div> 
</div>
<?php 

     }
  }

?>
</body>
</html>