<?php  
// initializing variables
$username = "";
$email    = "";
$errors = array(); 



    include_once "server.php";
    // include_once "process.php";

    
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECV::Admin Login Page</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--<link rel="stylesheet" href="index.css">-->
    <style>
       * {
    margin: 0px;
    padding: 0px;
  }
.container{
    margin-top: 20px;
    text-align: center;
    color: blue;
   
}

  body {
    font-size: 120%;
    background: #F8F8FF;
  }
  
 
  form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
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


    </style>
</head>
<body style="background-image: linear-gradient(90deg, darkgreen, cyan); background-reapeat:none;">
    <?php //include "header.php" ;?>
<div class="container">
    <?php  
        if(isset( $_SESSION['logError'])):
    ?>
    <h4 style="color:red;"><?php echo  $_SESSION['logError']; ?></h4>
    <?php 
    session_unset();
        endif; ?>
        <!-- <marquee> -->
            <div class="marquee">
            <h1 style="color:white; font-size:44px;">Exam Card Validation System With QR Code</h1>

            </div>
    <!-- </marquee> -->
        <!-- <img src="images/qrcode.png" alt="" width="20%" style="border-radius:50%"> -->
        <i class="fa fa-user" style="font-size:123px;color:green;opacity:0.6;margin-top:12px;"></i>
    <h3 style="color:white;">Admin Login</h3>
        <div class="form justify-centered">

            <form action="admin_login.php" class="form-group" method="post">
            
            <?php   include("process.php");
                    include("errors.php"); 
            ?>
                <input type="text" placeholder="Enter Username" class="form-control" name="username"><br>
                <input type="password" placeholder="Enter Password" class="form-control" name="password"><br>
                <button class="btn btn-primary form-control" name="admin_login">Login</button><br>
            </form>
            <p>Not Registered? Please register <a href="admin_reg.php">Here</a></p>

        </div>
    </div>
</body>
</html>