<?php
include("connect.php");
$sql = "SELECT id, name, branch,mark FROM student";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["branch"]. "" . $row["mark"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>