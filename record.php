<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
if(isset($_POST["record"]))
$sql = "SELECT * FROM student_entry";
$result = $conn->query($sql);

// Generate HTML output
$html = "<table>";
$html .= "<tr><th>Name</th><th>Roll Number</th><th>Gender</th><th>Year</th></tr>";
while($row = $result->fetch_assoc()) {
  $html .= "<tr>";
  $html .= "<td>" . $row["Name"] . "</td>";
  $html .= "<td>" . $row["Id"] . "</td>";
  $html .= "<td>" . $row["Gender"] . "</td>";
  $html .= "<td>" . $row["Current_Year"] . "</td>";
  $html .= "</tr>";
}
$html .= "</table>";

// Display HTML output
echo $html;

// Close connection
$conn->close();
?>
