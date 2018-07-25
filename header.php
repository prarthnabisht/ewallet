<?php
session_start();
if($_SESSION['is_login']==false){
  header("location: e.php");
$servername = "localhost";
$username = "root";
$password = "";
$db="internshipewallet";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>