<?php
$servername = "localhost";
$username = "20mca009";
$password = "2339";
$dbname = "20mca009";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
die("connection failed:" . mysqli_connect_error());
}
$a = $_POST["name"];
$b = $_POST["branch"];
$c = $_POST["mark"];
$sql = "INSERT INTO student(name,branch,mark) 
VALUES('$a','$b','$c')";
if(mysqli_query($conn, $sql))
{
	echo "New record created successfully";
}
else
{
	echo "error:" .$sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>