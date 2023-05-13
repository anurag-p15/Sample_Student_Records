<?php
$username="root";
$password="";
$dbname="demo1";
$servername="localhost";
$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    echo "Die...Connection Failed";
}
if(isset($_POST["write"])){
    $fn=$_POST["fname"];
    $ln=$_POST["lname"];
    $f=$_POST["field"];
    $d=$_POST["degree"];
    $r=$_POST["roll"];
    $g=$_POST["gender"];
    $y=$_POST["year"];
    $z="<br>";
    $stmt=$conn->prepare("Insert Into student_entry (First_Name,Last_Name,Field,Degree,Current_Year,Id,Gender) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$fn,$ln,$f,$d,$y,$r,$g);
    if($stmt->execute()){
        echo "<script>alert('Record successfully entered into database')</script>";
        echo "<script>setTimeout(\"location.href = './Student_entry.html';\",1500);</script>";
        exit();
    }
    $stmt->close();
}
$conn->close();
?>

