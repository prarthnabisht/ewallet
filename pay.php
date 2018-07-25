<?php
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container">
	<p class="heading"></p>
	<div class="row">
  <div class="col-1 col-md-4"></div>
  <div class="col-10 col-md-4">
  	<form action="login.php" method="post">
  <div class="form-group">
    <label for="email">Pay to (Mobile Number)</label>
    <input type="Mobile" name="mob" class="form-control" id="mobno">
  </div>
  <div class="form-group">
    <label for="pwd">Amount</label>
    <input type="text" name="amt" class="form-control" id="amt">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>


</body>
</html>



