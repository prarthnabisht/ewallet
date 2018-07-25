<?php
include("header.php");
if($_SESSION['is_login']==true){
  header("location: WalletHome.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Style/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style/e.css">
  <script>
    window.onload = ()=>{
        document.querySelector('input').onclick = () => {
          document.querySelector('.myerror').style.display = 'none';
      }
    }
   
  </script>>
 </head>
<body>
<div class="container">
	<p class="heading">Welcome!</p>
	<div class="row">
  <div class="col-1 col-md-4"></div>
  <div class="col-10 col-md-4">
  	<form action="login.php" method="post">
  <div class="form-group">
    <label for="email">Email id:</label>
    <input type="email" name="email" class="form-control" id="email">
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
  
</form>
<p class="signupbtn">Not a registered user?</p>
<?php if($_SESSION['login_error']){
  $_SESSION['login_error'] = false;
  ?>
    <p class="danger myerror" style="color: red;">Invalid UserId/Password</p>
  <?php
} ?>

  <a href="signup.php" target="_blank"><button class="btn btn-basic">Sign Up</button></a>
</div>
  <div class="col-1 col-md-4"></div>
</div>
	
</div>
</body>
</html>