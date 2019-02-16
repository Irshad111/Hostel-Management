<!DOCTYPE html>
<html lang="en">
<head>
  <title>Insertion form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
<div class="container">
  <h2>Hostel Record Management</h2>
  <form action="insertion.php" method="post">
    <div class="form-group">
      <label >Student Id:</label>
      <input type="text" class="form-control" placeholder="Enter student id" name="id" required>
    </div>
	 <div class="form-group">
      <label >Student Name:</label>
      <input type="text" class="form-control" placeholder="Enter student name" name="name"  required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Set password" name="password"  required>
    </div>
	<div class="form-group">
      <label >Father Name:</label>
      <input type="text" class="form-control" placeholder="Enter Father name" name="father_name"  required>
    </div>
	<div class="form-group">
      <label >Mother Name:</label>
      <input type="text" class="form-control" placeholder="Enter Mother name" name="mother_name"  required>
    </div>
	<div class="form-group">
      <label >Address:</label>
      <input type="text" class="form-control" placeholder="Enter Address" name="address" required>
    </div>
	<div class="form-group">
      <label >State:</label>
      <input type="text" class="form-control" placeholder="Enter state" name="state"  required>
    </div>
	<div class="form-group">
      <label >Pincode:</label>
      <input type="text" class="form-control" placeholder="Enter pincode" name="pincode"  required>
    </div>
	<div class="form-group">
      <label >Phone Number:</label>
      <input type="text" class="form-control" placeholder="Enter Phone number" name="phone_no"  required>
    </div>
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter Email" name="gmail"  required>
    </div>
	<div class="form-group">
      <label >Campus:</label>
      <input type="text" class="form-control" placeholder="Enter Campus" name="campus" required>
    </div>
	<div class="form-group">
      <label >Hostel Name:</label>
      <input type="text" class="form-control" placeholder="Enter hostel name" name="hostel" required>
    </div>
	<div class="form-group">
      <label >Room Number:</label>
      <input type="text" class="form-control" placeholder="Enter room no" name="room_no" required>
    </div>
	<div class="form-group">
      <label >Floor:</label>
      <input type="text" class="form-control" placeholder="Enter floor no " name="floor" required>
    </div>
	<div class="form-group">
      <label >Department:</label>
      <input type="text" class="form-control" placeholder="Enter department name" name="faculty" required>
    </div>
	<div class="form-group">
      <label >Course:</label>
      <input type="text" class="form-control" placeholder="Enter course name" name="course" required>
    </div><div class="form-group">
      <label >Course Year:</label>
      <input type="text" class="form-control" placeholder="Enter course year" name="course_year" required>
    </div>
	<div class="form-group">
      <label >Hostel Joining Date:</label>
      <input type="text" class="form-control" placeholder="YYYY-MM-dd" name="joining_date" required>
    </div>
    <button type="submit" class="btn btn-primary">Insert</button>
  </form>
  go back to home page <a href="home.php">Click Here</a>
</div>
</div>

</body>
</html>
