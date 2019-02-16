<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hostel');
$q="select *from std_r";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>View Record</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <h2>Hostel Management System</h2>     
  <div class="table-responsive table-bordered">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Password</th>
          <th>Name</th>
          <th>Father Name</th>
          <th>Mother Name</th>
          <th>Address</th>
          <th>State</th>
          <th>Pincode</th>
          <th>Phone Number</th>
          <th>Email</th>
          <th>campus</th>
		  <th>Hostel</th>
		  <th>Room Number</th>
		  <th>Floor</th>
		  <th>Department</th>
		  <th>Course</th>
		  <th>Course Year</th>
		  <th>Joining Year</th>
        </tr>	
      </thead>
<?php		
for($i=1;$i<=$num;$i++)
{
	$row=mysqli_fetch_array($result);
	?>		
      <tbody>
        <tr>
          <td><?php echo $row["id"];?></td>
		  <td><?php echo $row["password"];?></td>
		  <td><?php echo $row["name"];?></td>
		  <td><?php echo $row["father_name"];?></td>
		  <td><?php echo $row["mother_name"];?></td>
		  <td><?php echo $row["address"];?></td>
		  <td><?php echo $row["state"];?></td>
		  <td><?php echo $row["pincode"];?></td>
		  <td><?php echo $row["phone_no"];?></td>
		  <td><?php echo $row["gmail"];?></td>
		  <td><?php echo $row["campus"];?></td>
		  <td><?php echo $row["hostel"];?></td>
		  <td><?php echo $row["room_no"];?></td>
		  <td><?php echo $row["floor"];?></td>
		  <td><?php echo $row["faculty"];?></td>
		  <td><?php echo $row["course"];?></td>
		  <td><?php echo $row["course_year"];?></td>
		  <td><?php echo $row["joining_date"];?></td>
        </tr>
      </tbody>
	  <?php
}
?>
    </table>
  </div>
  go back to home page <a href="home.php">Click Here</a>
</div>

</body>
</html>
