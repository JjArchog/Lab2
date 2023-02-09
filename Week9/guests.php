<?php
$servername = "localhost";
$username = "webprogmi211";
$password = "webprogmi211";
$dbname = "webprogmi211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, Username, email, feedback FROM jbarchog_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["Username"]. "<br>";
    echo "id: " . $row["id"]. " - Email: " . $row["email"].  "<br>";
    echo "id: " . $row["id"]. " - Feedback: " . $row["feedback"].  "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>