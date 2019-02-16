<?php
session_start();
if(!isset($_SESSION['id']))
	header('location:http://localhost/hostel/s_login/login.php');
?>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hostel');
$q="select *from std_r where id='$_SESSION[id]' ";
$result=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Home page</title>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
<h2>Welcome </h2>
<div>
<form>
<?php
	$row=mysqli_fetch_array($result);
	?>
    <label >Id</label>
    <input type="text" value="<?php echo $row["id"]; ?>">
    <label >Student Name</label>
    <input type="text" value="<?php echo $row["name"]; ?>">
	    <label >Password</label>
    <input type="text" value="<?php echo $row["password"]; ?>">
	<label >Father Name</label>
    <input type="text" value="<?php echo $row["father_name"]; ?>">
	<label >Mother Name</label>
    <input type="text" value="<?php echo $row["mother_name"]; ?>">
	<label >Address</label>
    <input type="text" value="<?php echo $row["address"]; ?>">
	<label >State</label>
    <input type="text" value="<?php echo $row["state"]; ?>">
	<label >Pin Code</label>
    <input type="text" value="<?php echo $row["pincode"]; ?>">
	<label >Phone Number</label>
    <input type="text" value="<?php echo $row["phone_no"]; ?>">
	<label >Email</label>
    <input type="text" value="<?php echo $row["gmail"]; ?>">
	<label >Campus</label>
    <input type="text" value="<?php echo $row["campus"]; ?>">
	<label >Hostel</label>
    <input type="text" value="<?php echo $row["hostel"]; ?>">
	<label >Room Number</label>
    <input type="text" value="<?php echo $row["room_no"]; ?>">
	<label >Floor</label>
    <input type="text" value="<?php echo $row["floor"]; ?>">
	<label >Department</label>
    <input type="text" value="<?php echo $row["faculty"]; ?>">
	<label >Course</label>
    <input type="text" value="<?php echo $row["course"]; ?>">
	<label >Course Year</label>
    <input type="text" value="<?php echo $row["course_year"]; ?>">
	<label >Joining Date</label>
    <input type="text" value="<?php echo $row["joining_date"]; ?>">
</form>
</div>
<a href="logout.php">logout</a>
</body>
</html>
