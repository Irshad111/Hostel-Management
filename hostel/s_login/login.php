<!DOCTYPE html>
<html lang="en">
<head>
  <title>login panel</title>
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
  <h2>Student Login Panel</h2>
  <form action="validation.php" method="post">
    <div class="form-group">
      <label for="email">Student Id:</label>
      <input type="text" class="form-control"  placeholder="Enter student id" name="id">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="password">
    </div>
    <!--<div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>-->
    <button type="submit" class="btn btn-primary">Login</button>
  </form>
</div>
</div>

</body>
</html>
