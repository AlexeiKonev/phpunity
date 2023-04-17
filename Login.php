 
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "phpunity";

//login user variables
$loginUSer = $_POST["loginUSer"];
$loginPass = $_POST["loginPass"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username, password, level,coins FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["username"]. " - password: " . $row["password"]. " " . $row["level"].$row["coins"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>s