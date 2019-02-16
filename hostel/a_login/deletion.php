<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size ;$i++,$j++)
{
$index="b".$j;
if(isset($_POST[$index]))
$s_id[$i]=$_POST[$index];
else
$i--;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hostel');
for($k=1;$k<=$size;$k++)
{
$q="delete from std_r where id=".$s_id[$k];
mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>Deletion</title>
</head>
<body>
<h1>Hostel Record Management</h1>
<p>
<?php 
	echo $size."Record deleted"; 
?>
</p>
go back to home page <a href="home.php">Click Here</a>
</body>
</html>
