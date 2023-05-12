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
    $n=$_POST["name"];
    $r=$_POST["roll"];
    $g=$_POST["gender"];
    $y=$_POST["year"];
    $z="<br>";
    $stmt=$conn->prepare("Insert Into student_entry (Name,Current_Year,Id,Gender) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss",$n,$y,$r,$g);
    if($stmt->execute()){
        echo "<script>alert('Record successfully entered into database')</script>";
        echo "<script>setTimeout(\"location.href = './Student_entry.html';\",1500);</script>";
        exit();
    }
    $stmt->close();
}
$conn->close();
?>

