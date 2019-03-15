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
<title>Update Student Record</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <h2>Hostel Management System</h2>  
<form action="updation.php"  method="post">
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
          <td><?php echo $row["id"];?><input type="hidden" name="id<?php echo $i;?>"value="<?php echo $row["id"]; ?>"/></td>
		  <td><input type="text" name="password<?php echo $i;?>"value="<?php echo $row["password"]; ?>"/></td>
		  <td><input type="text" name="name<?php echo $i;?>"value="<?php echo $row["name"]; ?>"/></td>
		  <td><input type="text" name="father_name<?php echo $i;?>"value="<?php echo $row["father_name"]; ?>"/></td>
		  <td><input type="text" name="mother_name<?php echo $i;?>"value="<?php echo $row["mother_name"]; ?>"/></td>
		  <td><input type="text" name="address<?php echo $i;?>"value="<?php echo $row["address"]; ?>"/></td>
		  <td><input type="text" name="state<?php echo $i;?>"value="<?php echo $row["state"]; ?>"/></td>
		  <td><input type="text" name="pincode<?php echo $i;?>"value="<?php echo $row["pincode"]; ?>"/></td>
		  <td><input type="text" name="phone_no<?php echo $i;?>"value="<?php echo $row["phone_no"]; ?>"/></td>
		  <td><input type="text" name="gmail<?php echo $i;?>"value="<?php echo $row["gmail"]; ?>"/></td>
		  <td><input type="text" name="campus<?php echo $i;?>"value="<?php echo $row["campus"]; ?>"/></td>
		  <td><input type="text" name="hostel<?php echo $i;?>"value="<?php echo $row["hostel"]; ?>"/></td>
		  <td><input type="text" name="room_no<?php echo $i;?>"value="<?php echo $row["room_no"]; ?>"/></td>
		  <td><input type="text" name="floor<?php echo $i;?>"value="<?php echo $row["floor"]; ?>"/></td>
		  <td><input type="text" name="faculty<?php echo $i;?>"value="<?php echo $row["faculty"]; ?>"/></td>
		  <td><input type="text" name="course<?php echo $i;?>"value="<?php echo $row["course"]; ?>"/></td>
		  <td><input type="text" name="course_year<?php echo $i;?>"value="<?php echo $row["course_year"]; ?>"/></td>
		  <td><input type="text" name="joining_date<?php echo $i;?>"value="<?php echo $row["joining_date"]; ?>"/></td>
        </tr>
      </tbody>
	  <?php
}
?>
<tbody>
<td><input type="submit" value="update"</td></tr>
</tbody>
    </table>
  </div>
  </form>
  go back to home page <a href="home.php">Click Here</a>
</div>

</body>
</html>
