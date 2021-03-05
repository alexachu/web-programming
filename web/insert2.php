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
$b = $_POST["rollno"];
$c = $_POST["gender"];
$d = $_POST["address"];
$sql = "INSERT INTO studreg(name,rollno,gender,address) 
VALUES('$a','$b','$c','$d')";
if(mysqli_query($conn, $sql))
{
	echo "New record created successfully";
}
else
{
	echo "error:" .$sql . "<br>" . mysqli_error($conn);
}
$sql = "SELECT id, name, rollno,gender,address FROM studreg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Rollno</th><th>Gender</th><th>Address</th></tr>";
  while($row = $result->fetch_assoc())
 {
 echo "<tr>
<td>".$row["id"]."</td>
<td>".$row["name"]."</td>
<td> ".$row["rollno"]."</td>
<td>".$row["gender"]."</td>
<td>".$row["address"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>