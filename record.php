<<?php
$servername="localhost";
$password="";
$dbname="demo1";
$username="root";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Fetch data from the database
if(isset($_POST['record'])) {
$sql = "SELECT * FROM student_entry";
$result = $conn->query($sql);
// Generate HTML output
$html = "<table>";
$html .= "<tr><th>First Name</th><th>Last Name<th>Field</th><th>Degree</th><th>Roll Number</th><th>Gender</th><th>Year</th></tr>";
while($row = $result->fetch_assoc()) {
  $html .= "<tr>";
  $html .= "<td>" . $row["First_Name"] . "</td>";
  $html .= "<td>" . $row["Last_Name"] . "</td>";
  $html .= "<td>" . $row["Field"] . "</td>";
  $html .= "<td>" . $row["Degree"] . "</td>";
  $html .= "<td>" . $row["Id"] . "</td>";
  $html .= "<td>" . $row["Gender"] . "</td>";
  $html .= "<td>" . $row["Current_Year"] . "</td>";
  $html .= "</tr>";
}
$html .= "</table>";

"<style>
table {
  border-collapse: collapse;
  margin: 20px;
}

table, th, td {
  border: 1px solid black;
}

th, td {
  padding: 10px;
  text-align: left;
}

th {
  background-color: #3399FF;
  color: white;
}
</style>";

// Display HTML output
echo $html;
}
// Close connection
$conn->close();
?>
