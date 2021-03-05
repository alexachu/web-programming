<?php
include("connect.php");
$sql = "UPDATE student SET mark='50' WHERE id=2";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>