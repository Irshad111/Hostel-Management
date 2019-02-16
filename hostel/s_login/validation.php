<?php
session_start();
$id=$_POST['id'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hostel');
$q="select *from std_r where password='$password' && id='$id' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSTION['id'] = $id;
	header('location:http://localhost/hostel/s_login/home.php');
}
else
	header('location:http://localhost/hostel/s_login/login.php');
?>