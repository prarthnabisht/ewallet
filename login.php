<?php
include("header.php");


if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername =mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 
      
       $sql = "SELECT EmailId,fname,Balance FROM userinfotable WHERE EmailId = '$myusername' and pass = '$mypassword'";
      $result = $conn->query($sql);
      
      if($result->num_rows>0){
      	$_SESSION['is_login']=true;
      	
      	

    /* fetch object array */
    while ($row = $result->fetch_array()) {
    	$_SESSION['EmailId']=$row['EmailId'];
    	$_SESSION['fname']=$row['fname'];
    	//$_SESSION['balance']=$row['Balance'];
    	if($row['Balance']==null)
    	{
    		$_SESSION['balance']=0;
    	}
    	else {
    		$_SESSION['balance']=$row['Balance'];
    	}
    
    }
      	header("location: WalletHome.php");


      }else{
      	$_SESSION['login_error'] = 'Invalid user name/password';
      	echo $_SESSION['login_error'];
      	
       	header("location: e.php");
      }
     
   }
?>
     