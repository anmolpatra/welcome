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
    <div class="col-md-2"></div>
  	<div class="col-md-8">
  	 <h1 class="text-uppercase text-center">Student Details</h1>
  	 <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th>Roll</th>
		        <th>Name</th>
		        <th>Address</th>
		        <th>Gender</th>
		        <th>Age</th>
		        <th>Mark</th>
		        <th>Update</th>
		        <th>Delete</th>
		      </tr>
		    </thead> 
		    <tbody>
  	 <?php 
  	  
  	  include 'dbconnect.php';
  	 
  	  $query = "SELECT * FROM `student`";
  	  
  	  $result = mysqli_query($con, $query);
  	  
  	  while ($row = mysqli_fetch_assoc($result))
  	  {
  	 ?>
  	    
		    
		      <tr>
		        <td><?php echo $row['roll']; ?></td>
		        <td><?php echo $row['name']; ?></td>
		        <td><?php echo $row['address']; ?></td>
		        <td><?php echo $row['gender']; ?></td>
		        <td><?php echo $row['age']; ?></td>
		        <td><?php echo $row['mark']; ?></td>
		        <td><a href="stud_Update.php?stud_id=<?php echo $row['roll']; ?>" class="btn btn-warning glyphicon glyphicon-pencil" role="button"></a></td>
		        <td><a href="stud_Delete.php?stud_id=<?php echo $row['roll']; ?>" class="btn btn-danger glyphicon glyphicon-trash" role="button"></a></td>
		      </tr>
		      
		
		 
<?php  } ?>     
		    </tbody>
		  </table>
  		
  	</div>
  	<div class="col-md-2"></div>
  </div> 
</div>

</body>
</html>