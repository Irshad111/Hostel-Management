<?php
$id=$_POST['id'];
$name=$_POST['name'];
$password=$_POST['password'];
$father_name=$_POST['father_name'];
$mother_name=$_POST['mother_name'];
$address=$_POST['address'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$phone_no=$_POST['phone_no'];
$gmail=$_POST['gmail'];
$campus=$_POST['campus'];
$hostel=$_POST['hostel'];
$room_no=$_POST['room_no'];
$floor=$_POST['floor'];
$faculty=$_POST['faculty'];
$course=$_POST['course'];
$course_year=$_POST['course_year'];
$joining_date=$_POST['joining_date'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hostel');
$q="insert into std_r value($id,'$name',$password,'$father_name','$mother_name','$address','$state',$pincode,$phone_no,'$gmail','$campus','$hostel',$room_no,$floor,'$faculty','$course',$course_year,'$joining_date')";
$status=mysqli_query($con,$q);
mysqli_close($con);

?>
<!DOCTYPE html>
<html>
<head>
<title>Insertion</title>
</head>
<body>
<h1>Hostel Record Management System</h1>
<p>
<?php 
if($status==1) 
	echo "Record inserted"; 
else 
	echo "insertion failed";
?>
</p>
Do you want to insert more record? <a href="insertionform.php">Click Here</a></br>
go back to home page <a href="home.php">Click Here</a>
</body>
</html>