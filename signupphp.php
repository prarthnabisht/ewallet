<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="internshipewallet";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$em=$_POST["emailadd"];
$p=$_POST["pass"];
$m=$_POST["mobno"];

$sql = "INSERT INTO userinfotable (pass,fname,lname,Mob,EmailId)
VALUES ('$p','$fname','$lname','$m','$em')";

if ($conn->query($sql) === TRUE) {
	$_SESSION['fname']=$fname;
	$_SESSION['is_login']=true;
	header("location: WalletHome.php");
    echo "Sign Up successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>