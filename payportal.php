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
   <link rel="stylesheet" type="text/css" href="style/e.css">
	<title></title>
</head>
<body>
	<div class="container" style="margin: 10% auto;">
	<p class="heading"></p>
	<div class="row">
  <div class="col-1 col-md-4"></div>
  <div class="col-10 col-md-4">
  	<form action="pay.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="inputPhone">Phone</label>
                           <input type="text" class="form-control bfh-phone input-sm" data-format="+1 (ddd) ddd-dddd"  id="InputPhone" name="InputPhone" placeholder="phone:" >
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



