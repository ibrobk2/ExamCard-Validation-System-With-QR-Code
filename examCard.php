<?php //session_start();
include_once "server.php";
$reg = "";
$fullName = "";

if(isset($_POST['examCard'])){
  $reg = $_POST['reg_number'];

  $_SESSION['reg'] = $reg;

  $query = "SELECT * FROM students WHERE regNo = '$reg'";
  $result = mysqli_query($server, $query);

  if(empty($reg)){
    echo "<script>alert('Registration Number should Not be empty')</script>";
  }else{

  if($row = mysqli_fetch_assoc($result)){

  $_SESSION['fname'] = $row['fullName'];
  $_SESSION['department'] = $row['department'];
  $_SESSION['faculty'] = $row['faculty'];
  $_SESSION['level'] = $row['level'];

  header("location: qrcode.php");
  exit();

  
    // echo "Welcome ".$_SESSION['fname']."<br>";
    // echo "Your are in ".$_SESSION['department']." Department"."<br>";
    // echo "Your faculty is ". $_SESSION['faculty'];


  }
}

}
  
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Card Printing</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="index.css"> -->
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

    </style>
</head>
<body style="background-image: url('images/new_born.jpg'); background-repeat: no-repeat; background-size: cover;">
    <?php include "header.php" ;?>

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
    <div class="logo" style="text-align:center;">
    <img src="images/alqalam_logo.png" alt="">

    </div>
<div class="container" style="margin-top: 25px; color: white;">
    <h3 style="color:green">Print Examination Card</h3>
        <div class="form justify-centered">

            <form action="examCard.php" class="form-group" method="post">
             <?php   //include("process.php");
                    //include("errors.php");  
            ?>
    <div class="row" style="padding: 5px; gap: 7px;">
    <input type="text" placeholder="Registration Number" class="form-control col-sm" name="reg_number">
    <!-- <input type="text" placeholder="Town/Village" class="form-control col-sm" name="town"> -->

    </div>

  
        <!-- <input type="text" placeholder="Enter Username" class="form-control col-sm" name="user"> -->
    </div>

    
    </div>

            
                <br>
                <center>
                <button class="btn btn-primary form-control" name="examCard" style="width:50%; font-weight: bold; color: #fff; background: darkgreen; border:none; ouline:none;" id="btn" onmouseover="hover();" onmouseout="mouseout();">Generate Exam Card</button><br>

                </center>
            </form>
        </div>
    </div>
</body>
</html>