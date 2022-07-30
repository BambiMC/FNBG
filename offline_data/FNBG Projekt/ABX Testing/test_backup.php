<?php
$servername = "202.61.232.65:3306";
$username = "k174428_pc25";
$password = "B1b8j&4e3?Djc0g7";
$dbname = "k174428_pc25";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//müssen irgendwann zu ner humanen Zeit laufen
date_default_timezone_set('Europe/Berlin');
//$date = date('Y-m-d H:00:00');
$date = date('Y-m-d H:i:s');
$sql = "INSERT INTO WDP (time, peek)
VALUES ('$date', 1)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 