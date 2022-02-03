<?php  
// initializing variables
$username = "";
$level   = "";
$errors = array(); 
include_once "server.php";
   // include_once "process.php";

   if(isset($_POST['student_reg'])){
    //Variables Declaration
    $reg_num = mysqli_real_escape_string($server, $_POST['regNo']);//Registration Number
    $level = mysqli_real_escape_string($server, $_POST['level']);//student Level
    $faculty = mysqli_real_escape_string($server, $_POST['faculty']); //Faculty
    $department = mysqli_real_escape_string($server, $_POST['department']);//Department
    $full_name = mysqli_real_escape_string($server, $_POST['fullName']);//Student Full Name
    $password = mysqli_real_escape_string($server, $_POST['password']);//Password
   
    
    // Inputs validation: to ensure that the form is correctly filled ...
    if(empty($reg_num)){array_push($errors, "Registration Number required");}
    if(empty($level)){array_push($errors, "Level is required");}
    if(empty($faculty)){array_push($errors, "Faculty is required");}
    if(empty($department)){array_push($errors, "Department is required");}
    if(empty($full_name)){array_push($errors, "Full Name is required");}
    if(empty($password)){array_push($errors, "Password is required");}



    // if($password!=$password2){
    //     array_push($errors, "Passwords Mismatched!");
    // }
    // To check whether user exist in the database
    $query = "SELECT * FROM students WHERE fullName='$full_name' AND regNo ='$reg_num' LIMIT 1";
    $result = mysqli_query($server, $query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        if($user['regNo']==$reg_num){
            array_push($errors, "This Student already exist.");

        }
        // if($user['email']==$email){
        //     array_push($errors, "Email already exist.");

        // }
    }
    // Finally register a student if there are no errors in the form

if (count($errors) == 0) {
//	$password = md5($password);//encrypt the password before saving in the database

  $query = "INSERT INTO `students`(`regNo`, `fullName`, `department`, `level`, `faculty`, `password`) VALUES('$reg_num', '$full_name', '$department', '$level', '$faculty', '$password')";
  mysqli_query($server, $query);

  header('location: index.php');
  $_SESSION['regNo'] = $reg_num;
 $_SESSION['success'] = "Registration Successful, You can Now Login";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Page</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <script src="jquery/jquery-3.6.0.js"></script>
    <style>
           * {
    margin: 0px;
    padding: 0px;
  }
.container{
    margin-top: -220px;
    text-align: center;
    color: blue;
   
}

  body {
    
    /* background-image: url('images/new_born.jpg'); */
      
    font-size: 120%;
    background: #F8F8FF;
  }
  
 
  form, .content {
    width: 65%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #B0C4DE;
    background: rgba(255,255,255,0.5);
    border-radius: 0px 0px 10px 10px;
    box-shadow: 2px 4px green;

  }
  .input-group {
    margin: 10px 0px 10px 0px;
  }
  .input-group label {
    display: block;
    text-align: left;
    margin: 3px;
  }
  .input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
  }
  .btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
  }
  .error {
    width: 100%; 
    margin: 0px auto; 
    padding: 5px; 
    border: 1px solid #a94442; 
    color: #a94442; 
    background: #f2dede; 
    border-radius: 5px; 
    text-align: left;
    margin-bottom: 7px;
  }
  .success {
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    margin-bottom: 20px;
  }

  .btn-primary{
      color: #fff;
      background: darkgreen;
      font-weight: bolder;
  }



/* .marquee{
     white-space: nowrap;
    overflow: hidden;
    box-sizing: border-box;
}
 .marquee h1{
    display: inline-block;
    padding-left: 100%;
    animation: marquee 15s linear-infinite;
}
@keyframes marquee {
    0%   { transform: translate(0, 0); }
    100% { transform: translate(-100%, 0); }
} */

.marquee {
    width: 100%;
    line-height: 50px;
    background-color: green;
    color: white;
    white-space: nowrap;
    overflow: hidden;
    box-sizing: border-box;
    justify-contents: center;
    justify-self: center;
    border-radius: 6px;
}
.marquee h1 {
    display: inline-block;
    /* padding-left: 100%; */
    animation: marquee 15s linear infinite;
}
@keyframes marquee {
    0%   { transform: translate(0, 0); }
    100% { transform: translate(-100%, 0); }
}

button:hover{
    background: blue;
}
  .states{
     
    outline: 0; 
  } 
h3{
  
}

    </style>
    
    
</head>
<body style="background-image: url('images/alqalam_logo.png'); background-repeat: no-repeat; background-size: 50%;opacity:0.8;">
    <!-- <?php //include "header.php" ;?> -->

    <script>

        function hover(){
            document.getElementById('btn').style.backgroundColor = "palegreen";
            document.getElementById('btn').style.color = "darkgreen";

        }
        function mouseout(){
            document.getElementById('btn').style.backgroundColor = "green";
            document.getElementById('btn').style.color = "white";

   
        }
    </script>
<div class="container" style="margin-top: 25px; color: white;">
    <h3 style="color:green">Student Registration Form</h3>
        <div class="form justify-centered">

            <form action="student_reg.php" class="form-group" method="post">
            <?php include("errors.php") ; ?>
            <!-- <?php //  include("process.php"); ?> -->
               
           

    <div class="row" style="padding: 5px; gap: 7px;">
        <h4 style="color:#777;">Student Details</h3>

    </div>
    <hr style="border:2px double green;">
    <div class="row" style="padding: 5px; gap: 7px;">
    <input type="text" placeholder="Registration Number" class="form-control col-sm" name="regNo">
    <input type="text" placeholder="Full Name" class="form-control col-sm" name="fullName">
        <select name="level" id="" class="form-control col-sm">
          <option value="" >Select Level</option>
          <option value="100">100</option>
          <option value="200">200</option>
          <option value="300">300</option>
          <option value="400">400</option>
        </select>

    </div>

   

    <div class="row" >
        <input type="text" placeholder="Faculty" class="form-control col-sm" name="faculty" style="border: solid 1px #517B97;">
        <input type="text" placeholder="Department" class="form-control col-sm" name="department">
        <input type="password" placeholder="Choose Password" class="form-control col-sm" name="password">

    </div>
 
  

    
    </div>

            
                
                <button class="btn btn-primary form-control" name="student_reg" style="width:60%; font-weight: bold; color: #fff; background: darkgreen; border:none; outline:none;margin-top:12px;" id="btn" onmouseover="hover();" onmouseout="mouseout();"><i class="fas fa-registered" style="font-size:20px;"></i>egister</button><br>
            </form>
            <p style="color:green; font-weight:600;">Already Registered? Please Login <a href="student_login.php">Here</a></p>

        </div>

    </div>
</body>
</html>