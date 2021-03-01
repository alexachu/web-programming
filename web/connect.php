<?php
$servername="localhost";
$username="20mca009";
$password="2339";
$conn=mysqli_connect($servername,$username,$password);
if($conn)
{
echo "Connection succesfully";
}
mysqli_close($conn);
?>