<?php
$servername="localhost";
$password="";
$dbname="demo1";
$username="root";
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Error ".$conn->conn_error);
}
else{
    if(isset($_POST["save"])){
        $email=$_POST["mail"];
        $password=$_POST["pswd"];
        $stmt = $conn->prepare("INSERT INTO login_details (Email, Password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $password);
        if($stmt->execute()){
            header("Location:./Welcome.html");
            exit();
        }
        else{
            echo "Registration failed";
            exit();
        }
        $stmt->close();
    }
    if (isset($_POST["check"])){
        $email=$_POST["mail1"];
        $password=$_POST["pswd1"];
        $stmt = $conn->prepare("SELECT * FROM login_details WHERE Email = ? AND Password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
        header("Location:./Student_entry.html");
        } 
        else{
            echo "Login failed";
            header("Location:./login.html");
            exit();
        }
        $stmt->close();
    }
}
$conn->close();
?>
