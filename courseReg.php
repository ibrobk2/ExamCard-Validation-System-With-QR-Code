<?php  
// initializing variables
$username = "";
$email    = "";
$errors = array(); 
    include_once "server.php";
    // include_once "process.php";


    // Student Course registration Section********
  if(isset($_POST['courseReg'])){
      //Variables Declaration
      $reg_num = mysqli_real_escape_string($server, $_POST['regNum']);//Registration Number
      
      // First course
      $cc1 = mysqli_real_escape_string($server, $_POST['courseCode1']);//Course Code
      $ct1 = mysqli_real_escape_string($server, $_POST['courseTitle1']); //Course Title
      $cu1 = mysqli_real_escape_string($server, $_POST['creditUnit1']);//Credit Unit

      $cc2 = mysqli_real_escape_string($server, $_POST['courseCode2']);//Course Code
      $ct2 = mysqli_real_escape_string($server, $_POST['courseTitle2']); //Course Title
      $cu2 = mysqli_real_escape_string($server, $_POST['creditUnit2']);//Credit Unit

      $cc3 = mysqli_real_escape_string($server, $_POST['courseCode3']);//Course Code
      $ct3 = mysqli_real_escape_string($server, $_POST['courseTitle3']); //Course Title
      $cu3 = mysqli_real_escape_string($server, $_POST['creditUnit3']);//Credit Unit

      $cc4 = mysqli_real_escape_string($server, $_POST['courseCode4']);//Course Code
      $ct4 = mysqli_real_escape_string($server, $_POST['courseTitle4']); //Course Title
      $cu4 = mysqli_real_escape_string($server, $_POST['creditUnit4']);//Credit Unit

      $cc5 = mysqli_real_escape_string($server, $_POST['courseCode5']);//Course Code
      $ct5 = mysqli_real_escape_string($server, $_POST['courseTitle5']); //Course Title
      $cu5 = mysqli_real_escape_string($server, $_POST['creditUnit5']);//Credit Unit


      $cc6 = mysqli_real_escape_string($server, $_POST['courseCode6']);//Course Code
      $ct6 = mysqli_real_escape_string($server, $_POST['courseTitle6']); //Course Title
      $cu6 = mysqli_real_escape_string($server, $_POST['creditUnit6']);//Credit Unit


      $cc7 = mysqli_real_escape_string($server, $_POST['courseCode7']);//Course Code
      $ct7 = mysqli_real_escape_string($server, $_POST['courseTitle7']); //Course Title
      $cu7 = mysqli_real_escape_string($server, $_POST['creditUnit7']);//Credit Unit

      $cc8 = mysqli_real_escape_string($server, $_POST['courseCode8']);//Course Code
      $ct8 = mysqli_real_escape_string($server, $_POST['courseTitle8']); //Course Title
      $cu8 = mysqli_real_escape_string($server, $_POST['creditUnit8']);//Credit Unit

      $cc9 = mysqli_real_escape_string($server, $_POST['courseCode9']);//Course Code
      $ct9 = mysqli_real_escape_string($server, $_POST['courseTitle9']); //Course Title
      $cu9 = mysqli_real_escape_string($server, $_POST['creditUnit9']);//Credit Unit

      $cc10 = mysqli_real_escape_string($server, $_POST['courseCode10']);//Course Code
      $ct10 = mysqli_real_escape_string($server, $_POST['courseTitle10']); //Course Title
      $cu10 = mysqli_real_escape_string($server, $_POST['creditUnit10']);//Credit Unit

      // $cc11 = mysqli_real_escape_string($server, $_POST['courseCode11']);//Course Code
      // $ct11 = mysqli_real_escape_string($server, $_POST['courseTitle11']); //Course Title
      // $cu11 = mysqli_real_escape_string($server, $_POST['creditUnit11']);//Credit Unit

      // $cc12 = mysqli_real_escape_string($server, $_POST['courseCode12']);//Course Code
      // $ct12 = mysqli_real_escape_string($server, $_POST['courseTitle12']); //Course Title
      // $cu12 = mysqli_real_escape_string($server, $_POST['creditUnit12']);//Credit Unit

       
     
      
      // Inputs validation: to ensure that the form is correctly filled ...
      if(empty($reg_num)){array_push($errors, "Registration Number required");}
       
      // Finally register a student courses if there are no errors in the form

if (count($errors) == 0) {
//	$password = md5($password);//encrypt the password before saving in the database

  $query = "INSERT INTO `courses`(`regNo`, `cC1`, `cT1`, `cU1`, `cC2`, `cT2`, `cU2`, `cC3`, `cT3`, `cU3`, `cC4`, `cT4`, `cU4`, `cC5`, `cT5`, `cU5`, `cC6`, `cT6`, `cU6`, `cC7`, `cT7`, `cU7`, `cC8`, `cT8`, `cU8`, `cC9`, `cT9`, `cU9`, `cC10`, `cT10`, `cU10`) VALUES ('$reg_num', '$cc1','$ct1','$cu1','$cc2','$ct2','$cu2','$cc3','$ct3','$cu3','$cc4','$ct4','$cu4','$cc5','$ct5','$cu5','$cc6','$ct6','$cu6','$cc7','$ct7','$cu7','$cc8','$ct8','$cu8','$cc9','$ct9','$cu9','$cc10','$ct10','$cu10')";
  $result = mysqli_query($server, $query);

  if($result){
    echo "<script>alert('Registration successful!');</script>";
  }
}
  // header('location: index.php');
    // $_SESSION['regNo'] = $reg_num;
  // $_SESSION['success'] = "Registration Successful, You can Now Login";

}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<script>
      // Jquery Code for adding courses
      $(document).ready(function(){
        var tr = 
            "<div class='row' id='del' >"+
            "<select name='state' class='form-control col-sm states'>"+
                "<option value='select'>Select Course>></option>"+
                "<option value='Abia'>Abia</option>"+
                "<option value='Adamawa'>Adamawa</option>"+
                "<option value='Akwa Ibom'>Akwa Ibom</option>"+
                "<option value='Anambra'>Anambra</option>"+                    
            "</select>"+
            "<a href='javascript:void(0);' class='form-control col-sm btn btn-danger deleteRow'><i class='fas fa-trash'></i>&nbsp;Delete</a>"+
            "</div>";
            //Adding Row
        $(".addRow").click(function(){
           
        $(".addCourse").append(tr);
          });
         
         
        });
 //Deleting Row Section
        $(document).ready(function(){

        $(".deleteRow").click(function(){
           
           $('#del').remove();
             });
        });

   
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Course Registration</title>
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
<div class="container" style="margin-top: 25px; color: white;">
    <h3 style="color:green">Course Registration Form</h3>
        <div class="form justify-centered">

            <form action="courseReg.php" class="form-group" method="post">
            <?php include("errors.php") ; ?>

              <div class="row" style="padding: 5px; gap: 7px;">
                  <h4 style="color:#777;">Student Registration Number</h3>
              </div>
              <div class="row" style="padding: 5px; gap: 7px;">
              <input type="text" placeholder="Registration Number" class="form-control col-sm" name="regNum">
                </div>
 
    <hr style="border:2px double green;">
    <div class="row" style="padding: 5px; gap: 7px;">
        <h4 style="color:#777;">Register Courses</h3>
    </div>
    <!-- Course1 -->
    <div class="row" style="padding: 5px; gap: 7px;">
      <input type="text" placeholder="Course Code" class="form-control col-sm" name="courseCode1">
      <input type="text" placeholder="Course Title" class="form-control col-sm" name="courseTitle1">
      <input type="text" placeholder="Credit Unit" class="form-control col-sm" name="creditUnit1">

    </div>
    <!-- Course2 -->
    <div class="row" style="padding: 5px; gap: 7px;">
      <input type="text" placeholder="Course Code" class="form-control col-sm" name="courseCode2">
      <input type="text" placeholder="Course Title" class="form-control col-sm" name="courseTitle2">
      <input type="text" placeholder="Credit Unit" class="form-control col-sm" name="creditUnit2">

    </div>
    <!-- Course3 -->
    <div class="row" style="padding: 5px; gap: 7px;">
      <input type="text" placeholder="Course Code" class="form-control col-sm" name="courseCode3">
      <input type="text" placeholder="Course Title" class="form-control col-sm" name="courseTitle3">
      <input type="text" placeholder="Credit Unit" class="form-control col-sm" name="creditUnit3">

    </div>
    <!-- Course4 -->
    <div class="row" style="padding: 5px; gap: 7px;">
      <input type="text" placeholder="Course Code" class="form-control col-sm" name="courseCode4">
      <input type="text" placeholder="Course Title" class="form-control col-sm" name="courseTitle4">
      <input type="text" placeholder="Credit Unit" class="form-control col-sm" name="creditUnit4">

    </div>
    <!-- Course5 -->
    <div class="row" style="padding: 5px; gap: 7px;">
      <input type="text" placeholder="Course Code" class="form-control col-sm" name="courseCode5">
      <input type="text" placeholder="Course Title" class="form-control col-sm" name="courseTitle5">
      <input type="text" placeholder="Credit Unit" class="form-control col-sm" name="creditUnit5">

    </div>
    <!-- Course6 -->
    <div class="row" style="padding: 5px; gap: 7px;">
      <input type="text" placeholder="Course Code" class="form-control col-sm" name="courseCode6">
      <input type="text" placeholder="Course Title" class="form-control col-sm" name="courseTitle6">
      <input type="text" placeholder="Credit Unit" class="form-control col-sm" name="creditUnit6">

    </div>
    <!-- Course7 -->
    <div class="row" style="padding: 5px; gap: 7px;">
      <input type="text" placeholder="Course Code" class="form-control col-sm" name="courseCode7">
      <input type="text" placeholder="Course Title" class="form-control col-sm" name="courseTitle7">
      <input type="text" placeholder="Credit Unit" class="form-control col-sm" name="creditUnit7">

    </div>
    <!-- Course8 -->
    <div class="row" style="padding: 5px; gap: 7px;">
      <input type="text" placeholder="Course Code" class="form-control col-sm" name="courseCode8">
      <input type="text" placeholder="Course Title" class="form-control col-sm" name="courseTitle8">
      <input type="text" placeholder="Credit Unit" class="form-control col-sm" name="creditUnit8">

    </div>
    <!-- Course9 -->
    <div class="row" style="padding: 5px; gap: 7px;">
      <input type="text" placeholder="Course Code" class="form-control col-sm" name="courseCode9">
      <input type="text" placeholder="Course Title" class="form-control col-sm" name="courseTitle9">
      <input type="text" placeholder="Credit Unit" class="form-control col-sm" name="creditUnit9">

    </div>
    <!-- Course10 -->
    <div class="row" style="padding: 5px; gap: 7px;">
      <input type="text" placeholder="Course Code" class="form-control col-sm" name="courseCode10">
      <input type="text" placeholder="Course Title" class="form-control col-sm" name="courseTitle10">
      <input type="text" placeholder="Credit Unit" class="form-control col-sm" name="creditUnit10">

    </div>
    <!-- Course11
    <div class="row" style="padding: 5px; gap: 7px;">
      <input type="text" placeholder="Course Code" class="form-control col-sm" name="courseCode11">
      <input type="text" placeholder="Course Title" class="form-control col-sm" name="courseTitle11">
      <input type="text" placeholder="Credit Unit" class="form-control col-sm" name="creditUnit11">

    </div>
    // Course12 
    <div class="row" style="padding: 5px; gap: 7px;">
      <input type="text" placeholder="Course Code" class="form-control col-sm" name="courseCode12">
      <input type="text" placeholder="Course Title" class="form-control col-sm" name="courseTitle12">
      <input type="text" placeholder="Credit Unit" class="form-control col-sm" name="creditUnit12">

    </div> -->

    
    </div>

            
                
                <button class="btn btn-primary form-control" name="courseReg" style="width:60%; font-weight: bold; color: #fff; background: darkgreen; border:none; outline:none;margin-top:12px;" id="btn" onmouseover="hover();" onmouseout="mouseout();"><i class="fas fa-registered" style="font-size:20px;"></i>egister</button><br>
            </form>
        </div>
    </div>
</body>
</html>