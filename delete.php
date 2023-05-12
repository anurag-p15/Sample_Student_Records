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

// Delete a record from the database
if(isset($_POST["delete"])) {
    $name = $_POST["stud_name"];
    $stmt=$conn->prepare("DELETE FROM student_entry WHERE Name=?");
    $stmt->bind_param("s",$name);
    if ($stmt->execute() === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Fetch data from the database
$sql = "SELECT * FROM student_entry";
$result = $conn->query($sql);

// Generate HTML output
$html = "<table>";
$html .= "<tr><th>Name</th><th>Roll Number</th><th>Gender</th><th>Year</th><th>Action</th></tr>";
while($row = $result->fetch_assoc()) {
  $html .= "<tr>";
  $html .= "<td>" . $row["Name"] . "</td>";
  $html .= "<td>" . $row["Id"] . "</td>";
  $html .= "<td>" . $row["Gender"] . "</td>";
  $html .= "<td>" . $row["Current_Year"] . "</td>";
  $html .= "<td><a href='?delete=" . $row["Id"] . "'>Delete</a></td>";
  $html .= "</tr>";
}
$html .= "</table>";

// Display HTML output
echo $html;

// Close connection
$conn->close();
?>
