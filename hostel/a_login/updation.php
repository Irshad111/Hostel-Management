<?php
$size=sizeof($_POST);
$records=$size/18;
for($i=1;$i<=$records;$i++)
{
    $index1="id".$i;	
    $id[$i]=$_POST[$index1];
	$index2="password".$i;	
    $password[$i]=$_POST[$index2];
	$index3="name".$i;	
    $name[$i]=$_POST[$index3];
	$index4="father_name".$i;	
    $father_name[$i]=$_POST[$index4];
	$index5="mother_name".$i;	
    $mother_name[$i]=$_POST[$index5];
	$index6="address".$i;	
    $address[$i]=$_POST[$index6];
	$index7="state".$i;	
    $state[$i]=$_POST[$index7];
	$index8="pincode".$i;	
    $pincode[$i]=$_POST[$index8];
	$index9="phone_no".$i;	
    $phone_no[$i]=$_POST[$index9];
	$index10="gmail".$i;	
    $gmail[$i]=$_POST[$index10];
	$index11="campus".$i;	
    $campus[$i]=$_POST[$index11];
	$index12="hostel".$i;	
    $hostel[$i]=$_POST[$index12];
	$index13="room_no".$i;	
    $room_no[$i]=$_POST[$index13];
	$index14="floor".$i;	
    $floor[$i]=$_POST[$index14];
	$index15="faculty".$i;	
    $faculty[$i]=$_POST[$index15];
	$index16="course".$i;	
    $course[$i]=$_POST[$index16];
	$index17="course_year".$i;	
    $course_year[$i]=$_POST[$index17];
	$index18="joining_date".$i;	
    $joining_date[$i]=$_POST[$index18];
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hostel');
for($i=1;$i<=$records;$i++)
{
$q="update std_r set password=$password[$i], name='$name[$i]', father_name='$father_name[$i]',mother_name='$mother_name[$i]',address='$address[$i]',state='$state[$i]',pincode=$pincode[$i],phone_no=$phone_no[$i],gmail='$gmail[$i]',campus='$campus[$i]',hostel='$hostel[$i]',room_no=$room_no[$i],floor=$floor[$i],faculty='$faculty[$i]',course='$course[$i]',course_year=$course_year[$i],joining_date='$joining_date[$i]' where id=$id[$i]";
    mysqli_query($con,$q);
	}
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>updation</title>
</head>
<body>
<h1>Hostel record Management</h1>
<p>
<?php 
	echo "Records updated"; 
?>
</p>
go back to home page <a href="home.php">Click Here</a>
</body>
</html>
