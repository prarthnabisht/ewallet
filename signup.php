<?php
include("header.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/e.css">
  
 </head>
<body>
<div class="container">
	<h1 class="heading">Welcome!</h1>
	<div class="row">
  <div class="col-1 col-md-4"></div>
  <div class="col-10 col-md-4">
  	<form action="signupphp.php" method="post">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="emailadd" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="email">First Name:</label>
    <input type="text" name="fname" class="form-control" id="text">
  </div>
  <div class="form-group">
    <label for="email">Last Name:</label>
    <input type="text" name="lname" class="form-control" id="text">
  </div>
  <div class="form-group">
    <label for="email">Mobile number:</label>
    <input type="text" name="mobno" class="form-control" id="Mobile">
  </div>
  
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="pass" class="form-control" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form></div>
  <div class="col-1 col-md-4"></div>
</div>
	
</div>
</body>
</html>