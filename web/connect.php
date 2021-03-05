<?php
$servername="localhost";
$username="20mca009";
$password="2339";
$dbname = "20mca009";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>