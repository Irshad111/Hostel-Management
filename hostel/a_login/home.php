<?php
session_start();
if(!isset($_SESSION['id']))
	header('location:http://localhost/a_login/login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h1>Hostel Management Record System</h1>
   <div class="btn-group btn-group-justified">
    <a href="view.php" class="btn btn-primary">View</a>
    <a href="insertionform.php" class="btn btn-primary">Insert</a>
    <a href="deletionform.php" class="btn btn-primary">Delete</a>
	<a href="updationform.php" class="btn btn-primary">Update</a>
	<a href="logout.php" class="btn btn-primary">Logout</a>
  </div>
</div>

</body>
</html>