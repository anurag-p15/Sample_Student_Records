<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  // Redirect to login page
  echo "You are not logged in";
  header('Location: ./login.html');
  exit();
}
else{
$content = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./Student_entry.css" type="text/css">
    <title>Dashboard</title>
</head>
<body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"><a href="./Welcome.html" role="button" class="btn btn-primary">Home</a></div>
                <div class="col-md-4"><a href="./Contact.html" role="button" class="btn btn-primary">Contact</a></div>
                <div class="col-sm-3">
                    <form action="./logout.php" method="POST">
                    
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>  
            </div>
        </div>
    </div>
    <div class="Intro">   
    </div>
        <div class="authentication"class="col-md-4">
        <form action="./write.php" method="POST">
            <div class="row"style="margin-left:1%">
                <h3>Register</h3>
                    <div class="col-md-6">
                        <span>Enter first name of Student</span><br>
                        <input class="form-control" class="form-control"type="text" name="fname" id="fname"placeholder="Enter Name" value = ""required>
                    </div>
            </div>  
            <div class="row"style="margin-left:1%">
                <div class="col-md-6">
                    <span>Enter last name of Student</span><br>
                    <input class="form-control" type="text" name="lname" id="lname"placeholder="Enter Name" value = ""required>
                </div>
                </div>
                <div class="row"style="margin-left:1%">
                    <div class="col-md-6">
                        <span>Enter Field of Study</span><br>
                        <select class="form-control" name="field" id="field" required>
                            <option>---</option>
                            <option>Science</option>
                            <option>Commerce</option>
                            <option>Arts</option>
                            <option>Diploma</option>
                        </select>
                    </div>
                    </div> 
        <div class="row"style="margin-left:1%">
            <div class="col-md-6">
                <span>Enter degree of Student</span><br>
                <select class="form-control"name="degree" id="degree" required>
                    <option>---</option>
                    <option>B.Tech</option>
                    <option>B.Sc</option>
                    <option>B.Com</option>
                    <option>BBA</option>
                    <option>BMS</option>
                    <option>BAFF</option>
                    <option>Economics</option>
                    <option>Finance</option>
                    <option>Business</option>
                    <option>Archaeology</option>
                    <option>Literature</option>
                    <option>Teaching</option>
                    <option>MBBS</option>
                    <option>Hospitality</option>
                    <option>Orhthopaedic</option>
                    <option>Dentist</option>
                    <option>Psychology</option>
                    <option>Ayurvedic</option>
                    <option>Phd</option>
                    <option>M.Sc/M.Tech</option>
                    <option>MBA</option>
                </select>
            </div>
       </div>  
            <div class="row"style="margin-left:1%">
                <div class="col-md-6">
                    <span>Enter Roll Number</span><br>
                    <input class="form-control"type="number" name="roll" id="roll"placeholder="Enter roll number" value = "" required>
                </div>
            </div>  
            <div class="row"style="margin-left:1%">
                <div class="col-md-6">
                    <span>Enter Year of Student</span><br>
                    <select class="form-control"name="year" id="year" required>
                        <option>---</option>
                        <option>FY</option>
                        <option>SY</option>
                        <option>TY</option>
                        <option>LY</option>
                    </select>
                </div>
                </div>
                <div class="row"style="margin-left:1%">
                    <div class="col-md-6">
                        <span>Gender</span><br>
                        <select class="form-control"name="gender" id="gender" required>
                            <option>---</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>        
               <div class="row"style="margin-left:1%">
                    <div class="col-md-6">
                    <input  class="btn btn-primary" name="write" type="submit"style="margin-bottom:10%;margin-top:10%" >
                    </div>
                </form>
        </div> 
        
        <div class="row"style="margin-left:1%">
        <form action="./record.php" method="POST" >
            <h3>Records</h3>
            <div class="col-md-6">
                Check Records of Students<br>
                <input class="btn btn-primary" name="record" type="submit" style="margin-bottom:5%;margin-top:5%">
            </div>  
        </div>
    </form> 
    </div>
    <div class="operation"class="col-md-4">
        <form action="./delete.php" method="POST">
            <h3>Delete Student Details</h3>
            <h5>Delete a indivdual student</h5>
            <span>Enter Student's First Name</span>
            <input class="form-control" type="text" placeholder="Enter student's first name" name="fname" id="fname" required><br>
            <span>Enter Student's Last Name</span>
            <input type="text" class="form-control" placeholder="Enter student's last name" name="lname" id="lname" required><br>
            <span>Enter Student's Roll Number</span>
            <input type="text"class="form-control"  placeholder="Enter roll number" name="roll" id="roll" required><br>
            <input class="btn btn-warning" name="delete" type="submit" style="margin-bottom:5%;margin-top:5%">
            </form>
            <form action="./delete.php" method="post">
            <h5>Delete Group of Students by their Degree and Year</h5>
            <div class="row">
                <div class="col-md-6">
                    <span>Enter Year of Student</span><br>
                    <select class="form-control"name="year" id="year" required>
                        <option>---</option>
                        <option>FY</option>
                        <option>SY</option>
                        <option>TY</option>
                        <option>LY</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span>Enter degree of Student</span><br>
                    <select class="form-control"name="degree" id="degree" required>
                        <option>---</option>
                        <option>B.Tech</option>
                        <option>B.Sc</option>
                        <option>B.Com</option>
                        <option>BBA</option>
                        <option>BMS</option>
                        <option>BAFF</option>
                        <option>Economics</option>
                        <option>Finance</option>
                        <option>Business</option>
                        <option>Archaeology</option>
                        <option>Literature</option>
                        <option>Teaching</option>
                        <option>MBBS</option>
                        <option>Hospitality</option>
                        <option>Orhthopaedic</option>
                        <option>Dentist</option>
                        <option>Psychology</option>
                        <option>Ayurvedic</option>
                        <option>Phd</option>
                        <option>M.Sc/M.Tech</option>
                        <option>MBA</option>
                    </select>
                </div>
           </div>  
           <input class="btn btn-warning" name="delete1" type="submit" style="margin-bottom:5%;margin-top:5%">
        </form>    
    </div> 
    <div class="searching" class="col-md-4">
        <form action="./fname.php" method="POST">
            <!-- Search by First name -->
            <h3>Search Records</h3>
            <h5>Search by First Name</h5>
            <span>Enter Student's First Name</span>
            <input class="form-control" type="text" placeholder="Enter student's first name" name="fname" id="fname" required><br>
            <input class="btn btn-warning" name="search" type="submit" style="margin-bottom:3%;">
            </form>
            <!-- Search by Last Name -->
            <form action="./lname.php" method="POST">
            <h5>Search by Last Name</h5>
            <span>Enter Student's Last Name</span>
            <input type="text" class="form-control" placeholder="Enter student's last name" name="lname" id="lname" required><br>
            <input class="btn btn-warning" name="search1" type="submit" style="margin-bottom:1%;">
            </form>
            <form action="./year_dept.php" method="POST">
                <h5>Search by Department and Year of Student</h5>
                <span>Select Department and Year</span>
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control"name="degree" id="degree" required>
                            <option>---</option>
                            <option>B.Tech</option>
                            <option>B.Sc</option>
                            <option>B.Com</option>
                            <option>BBA</option>
                            <option>BMS</option>
                            <option>BAFF</option>
                            <option>Economics</option>
                            <option>Finance</option>
                            <option>Business</option>
                            <option>Archaeology</option>
                            <option>Literature</option>
                            <option>Teaching</option>
                            <option>MBBS</option>
                            <option>Hospitality</option>
                            <option>Orhthopaedic</option>
                            <option>Dentist</option>
                            <option>Psychology</option>
                            <option>Ayurvedic</option>
                            <option>Phd</option>
                            <option>M.Sc/M.Tech</option>
                            <option>MBA</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                    <select class="form-control"name="year" id="year" required>
                        <option>---</option>
                        <option>FY</option>
                        <option>SY</option>
                        <option>TY</option>
                        <option>LY</option>
                    </select>
                    </div>
               </div>  
                <input class="btn btn-warning" name="search2" type="submit" style="margin-bottom:1%;margin-top:1%;">
            </form>
            <div class="row">
                <div class="col-md-6">
                    <form action="./year.php" method="POST">
                        <h5>Search by Year of Student</h5>
                        <span>Select Year</span>
                    <select class="form-control"name="year" id="year" required>
                        <option>---</option>
                        <option>FY</option>
                        <option>SY</option>
                        <option>TY</option>
                        <option>LY</option>
                    </select>
                    <input class="btn btn-warning" name="search3" type="submit" style="margin-bottom:1%;margin-top:1%;">
                </div>
            </form>
                <div class="col-md-6">
                    <h5>Search by Department</h5>
                    <span>Select Department</span>
                    <form action="./dept.php" method="POST">
                    <select class="form-control"name="degree" id="degree" required>
                        <option>---</option>
                        <option>B.Tech</option>
                        <option>B.Sc</option>
                        <option>B.Com</option>
                        <option>BBA</option>
                        <option>BMS</option>
                        <option>BAFF</option>
                        <option>Economics</option>
                        <option>Finance</option>
                        <option>Business</option>
                        <option>Archaeology</option>
                        <option>Literature</option>
                        <option>Teaching</option>
                        <option>MBBS</option>
                        <option>Hospitality</option>
                        <option>Orhthopaedic</option>
                        <option>Dentist</option>
                        <option>Psychology</option>
                        <option>Ayurvedic</option>
                        <option>Phd</option>
                        <option>M.Sc/M.Tech</option>
                        <option>MBA</option>
                    </select>
                    <input class="btn btn-warning" name="search4" type="submit" style="margin-bottom:1%;margin-top:1%;">
                </form>
                </div>
           </div>  
            
    </div> 
</body>
</html>
HTML;
echo $content;
}
?>