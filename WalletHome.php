<?php 
include("header.php");
if($_SESSION['is_login']==false){
  header("location: e.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title> 
    MY WALLET</title>
    <style>
        .navbar {
     padding-top: 15px;s
     padding-bottom: 15px;
     border: 0;
     border-radius: 0;
     margin-bottom: 0;
     font-size: 12px;
     letter-spacing: 5px;
 }
 .navbar-nav  li a:hover {
     color: #1abc9c !important;
 }
 button.btn.btn-basic{
  display: block;
  margin: auto;
}

    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
 <div class="container-fluid">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>                        
     </button>
     <a class="navbar-brand" href="#myPage">E WALLET</a>
   </div>
   <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right">
         <li><span><img src="https://image.ibb.co/i5rwMy/profile_pic.png
https://image.ibb.co/i5rwMy/profile_pic.png
" class="rounded-circle" style="width: 44px; color: white;"></span></li>
       <li><a href="#"><?php echo strtoupper($_SESSION['fname']); ?></a></li>
       <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#">SETTNGS
         <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="BalanceDetails.php">Wallet </a></li>
           <li><a href="#">Transaction Details</a></li>
           <li><a href="#">Edit Profile</a></li> 
           <li><form action="logout.php" method="POST"><button type="submit" class="btn btn-link">Logout</button></form></li>
         </ul>
       </li>
     
       
       
     </ul>
   </div>
 </div>
</nav>
<a href="pay.php"><button type="submit" class="btn btn-link">Pay</button></a>

</body>
</html>